// Loan Calculator - Dynamic Real-time Calculations

document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('.form-pre-approved');
    if (!form) return;

    const amountInput = document.getElementById('amount');
    const paymentInput = document.getElementById('payment');
    const percentInput = document.querySelector('.input-percent');
    const interestRateInput = document.getElementById('interestRate');
    const taxInput = document.getElementById('tax');
    const insuranceInput = document.getElementById('insurance');
    const amortizationSelect = document.querySelector('.form-pre-approved .nice-select');
    const resultSpan = form.querySelector('p span');
    const calculateBtn = form.querySelector('.tf-btn.bg-color-primary');
    const resetBtn = form.querySelector('.tf-btn.style-border');

    // Create alert notification container
    function createNotification() {
        let notification = document.getElementById('calculator-notification');
        if (!notification) {
            notification = document.createElement('div');
            notification.id = 'calculator-notification';
            notification.style.cssText = `
                position: fixed;
                top: 120px;
                left: 50%;
                transform: translateX(-50%);
                background: linear-gradient(135deg, #f1913d 0%, #ff6b35 100%);
                color: white;
                padding: 20px 30px;
                border-radius: 12px;
                box-shadow: 0 8px 25px rgba(241, 145, 61, 0.4);
                z-index: 9999;
                max-width: 500px;
                font-weight: 600;
                font-size: 16px;
                text-align: center;
                animation: slideDown 0.5s ease;
                display: none;
            `;
            document.body.appendChild(notification);
        }
        return notification;
    }

    // Show notification with result
    function showResultNotification(monthlyPayment) {
        const notification = createNotification();
        notification.innerHTML = `
            <div style="margin-bottom: 10px; font-size: 14px; opacity: 0.9;">Your Estimated Monthly Payment</div>
            <div style="font-size: 28px; font-weight: 700;">$${monthlyPayment}</div>
        `;
        notification.style.display = 'block';

        // Auto-hide after 5 seconds
        setTimeout(() => {
            notification.style.display = 'none';
        }, 5000);
    }

    // Add CSS for error messages to document
    const style = document.createElement('style');
    style.textContent = `
        .loan-calc-error {
            color: #ff4757 !important;
            font-size: 13px !important;
            margin-top: 6px !important;
            font-weight: 500 !important;
            display: block !important;
        }
        @keyframes slideDown {
            from {
                transform: translateX(-50%) translateY(-20px);
                opacity: 0;
            }
            to {
                transform: translateX(-50%) translateY(0);
                opacity: 1;
            }
        }
    `;
    document.head.appendChild(style);

    // Clear error messages
    function clearErrors() {
        const errorMessages = document.querySelectorAll('.loan-calc-error');
        errorMessages.forEach(msg => msg.remove());
    }

    // Show error message below input
    function showFieldError(fieldSelector, message) {
        const field = document.querySelector(fieldSelector);
        if (field) {
            // Remove existing errors for this field
            const existingError = field.nextElementSibling;
            if (existingError && existingError.classList.contains('loan-calc-error')) {
                existingError.remove();
            }

            const errorDiv = document.createElement('div');
            errorDiv.className = 'loan-calc-error';
            errorDiv.style.cssText = `
                color: #ff4757;
                font-size: 13px;
                margin-top: 6px;
                font-weight: 500;
                display: block;
            `;
            errorDiv.textContent = message;
            field.parentElement.appendChild(errorDiv);
        }
    }

    // Calculate monthly payment
    function calculateMonthlyPayment(showAlert = false) {
        clearErrors();

        const totalAmount = parseFloat(amountInput.value) || 0;
        const downPayment = parseFloat(paymentInput.value) || 0;
        const annualRate = parseFloat(interestRateInput.value) || 0;
        const propertyTax = parseFloat(taxInput.value) || 0;
        const homeInsurance = parseFloat(insuranceInput.value) || 0;

        // Get amortization period from selected option
        let amortizationText = document.querySelector('.form-pre-approved .nice-select .current')?.textContent || '';
        let months = 0;

        // Extract number of months from the selection
        if (amortizationText.includes('month')) {
            const match = amortizationText.match(/(\d+)/);
            months = match ? parseInt(match[1]) : 0;
        }

        // Validate Amortization Period first
        if (months <= 0) {
            resultSpan.textContent = '0.00';
            if (showAlert) {
                showFieldError('.form-pre-approved .nice-select', 'Please select an amortization period');
            }
            return;
        }

        // Validate Total Amount
        if (totalAmount <= 0) {
            resultSpan.textContent = '0.00';
            if (showAlert) {
                showFieldError('#amount', 'Please enter a valid total amount');
            }
            return;
        }

        // Validate Down Payment
        if (downPayment < 0) {
            resultSpan.textContent = '0.00';
            if (showAlert) {
                showFieldError('#payment', 'Down payment cannot be negative');
            }
            return;
        }

        // Validate Down Payment is not greater than Total Amount
        const principal = totalAmount - downPayment;
        if (principal <= 0) {
            resultSpan.textContent = '0.00';
            if (showAlert) {
                showFieldError('#payment', 'Down payment cannot be equal to or greater than total amount');
            }
            return;
        }

        // Validate Interest Rate
        if (annualRate < 0) {
            resultSpan.textContent = '0.00';
            if (showAlert) {
                showFieldError('#interestRate', 'Interest rate cannot be negative');
            }
            return;
        }

        // Calculate monthly payment using mortgage formula
        const monthlyRate = annualRate / 12 / 100;
        let monthlyPayment = 0;

        if (monthlyRate === 0) {
            // Simple division if no interest
            monthlyPayment = principal / months;
        } else {
            // Mortgage formula: M = P * [r(1+r)^n] / [(1+r)^n - 1]
            const numerator = principal * monthlyRate * Math.pow(1 + monthlyRate, months);
            const denominator = Math.pow(1 + monthlyRate, months) - 1;
            monthlyPayment = numerator / denominator;
        }

        // Add monthly tax and insurance
        const monthlyTax = propertyTax / 12;
        const monthlyInsurance = homeInsurance / 12;
        const totalMonthlyPayment = monthlyPayment + monthlyTax + monthlyInsurance;

        // Format the result (without adding $ here since showResultNotification adds it)
        const formattedValue = totalMonthlyPayment.toFixed(2).replace(/\B(?=(\d{3})+(?!\d))/g, ',');
        const formattedResult = '$' + formattedValue;

        // Update result with formatted currency
        resultSpan.textContent = formattedResult;

        // Show alert notification if requested
        if (showAlert) {
            showResultNotification(formattedValue);
        }

        return totalMonthlyPayment;
    }

    // Update down payment percentage based on amount
    function updateDownPaymentPercent() {
        const totalAmount = parseFloat(amountInput.value) || 0;
        const downPayment = parseFloat(paymentInput.value) || 0;

        if (totalAmount > 0) {
            const percent = ((downPayment / totalAmount) * 100).toFixed(1);
            percentInput.value = percent + '%';
        } else {
            percentInput.value = '0%';
        }
    }

    // Calculate down payment based on percentage input
    function updateDownPaymentFromPercent() {
        const totalAmount = parseFloat(amountInput.value) || 0;
        const percentText = percentInput.value.replace('%', '');
        const percent = parseFloat(percentText) || 0;

        if (totalAmount > 0 && percent >= 0 && percent <= 100) {
            const downPayment = (totalAmount * percent) / 100;
            paymentInput.value = downPayment.toFixed(2);
        }
    }

    // Event listeners for real-time calculation
    amountInput.addEventListener('input', function() {
        updateDownPaymentPercent();
        calculateMonthlyPayment(false);
    });

    paymentInput.addEventListener('input', function() {
        updateDownPaymentPercent();
        calculateMonthlyPayment(false);
    });

    percentInput.addEventListener('input', function() {
        updateDownPaymentFromPercent();
        calculateMonthlyPayment(false);
    });

    interestRateInput.addEventListener('input', function() {
        calculateMonthlyPayment(false);
    });

    taxInput.addEventListener('input', function() {
        calculateMonthlyPayment(false);
    });

    insuranceInput.addEventListener('input', function() {
        calculateMonthlyPayment(false);
    });

    // Handle amortization period selection
    if (amortizationSelect) {
        amortizationSelect.addEventListener('click', function() {
            setTimeout(() => {
                calculateMonthlyPayment(false);
            }, 100);
        });

        // Also watch for when nice-select updates the current value
        const observer = new MutationObserver(function() {
            calculateMonthlyPayment(false);
        });

        const currentSpan = amortizationSelect.querySelector('.current');
        if (currentSpan) {
            observer.observe(currentSpan, { childList: true, subtree: true, characterData: true });
        }
    }

    // Calculate button click - shows alert notification
    if (calculateBtn) {
        calculateBtn.addEventListener('click', function(e) {
            e.preventDefault();
            calculateMonthlyPayment(true);
        });
    }

    // Reset button click
    if (resetBtn) {
        resetBtn.addEventListener('click', function(e) {
            e.preventDefault();
            amountInput.value = '';
            paymentInput.value = '';
            percentInput.value = '0%';
            interestRateInput.value = '';
            taxInput.value = '';
            insuranceInput.value = '';
            resultSpan.textContent = '0.00';

            // Clear error messages
            clearErrors();

            // Hide notification
            const notification = document.getElementById('calculator-notification');
            if (notification) {
                notification.style.display = 'none';
            }

            // Reset dropdown
            if (amortizationSelect) {
                const options = amortizationSelect.querySelectorAll('.option');
                options.forEach(opt => opt.classList.remove('selected'));
                if (options[0]) {
                    options[0].classList.add('selected');
                    amortizationSelect.querySelector('.current').textContent = options[0].textContent;
                }
            }
        });
    }

    // Initial calculation on page load
    calculateMonthlyPayment(false);
});

// Format currency input as user types
function formatCurrency(value) {
    return '$' + value.replace(/\B(?=(\d{3})+(?!\d))/g, ',');
}
