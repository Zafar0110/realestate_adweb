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

    // Calculate monthly payment
    function calculateMonthlyPayment() {
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

        // Validate inputs
        if (totalAmount <= 0 || downPayment < 0 || annualRate < 0 || months <= 0) {
            resultSpan.textContent = '0.00';
            return;
        }

        // Calculate principal (loan amount)
        const principal = totalAmount - downPayment;

        if (principal <= 0) {
            resultSpan.textContent = '0.00';
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

        // Update result with formatted currency
        resultSpan.textContent = '$' + totalMonthlyPayment.toFixed(2).replace(/\B(?=(\d{3})+(?!\d))/g, ',');
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
        calculateMonthlyPayment();
    });

    paymentInput.addEventListener('input', function() {
        updateDownPaymentPercent();
        calculateMonthlyPayment();
    });

    percentInput.addEventListener('input', function() {
        updateDownPaymentFromPercent();
        calculateMonthlyPayment();
    });

    interestRateInput.addEventListener('input', function() {
        calculateMonthlyPayment();
    });

    taxInput.addEventListener('input', function() {
        calculateMonthlyPayment();
    });

    insuranceInput.addEventListener('input', function() {
        calculateMonthlyPayment();
    });

    // Handle amortization period selection
    if (amortizationSelect) {
        amortizationSelect.addEventListener('click', function() {
            setTimeout(() => {
                calculateMonthlyPayment();
            }, 100);
        });

        // Also watch for when nice-select updates the current value
        const observer = new MutationObserver(function() {
            calculateMonthlyPayment();
        });

        const currentSpan = amortizationSelect.querySelector('.current');
        if (currentSpan) {
            observer.observe(currentSpan, { childList: true, subtree: true, characterData: true });
        }
    }

    // Calculate button click
    if (calculateBtn) {
        calculateBtn.addEventListener('click', function(e) {
            e.preventDefault();
            calculateMonthlyPayment();
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
    calculateMonthlyPayment();
});

// Format currency input as user types
function formatCurrency(value) {
    return '$' + value.replace(/\B(?=(\d{3})+(?!\d))/g, ',');
}
