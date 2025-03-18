@extends('frontend.layouts.header')
@section('scripts', "https://cdn.jsdelivr.net/npm/chart.js")

@section('content')

    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">EMI Calculator</h4>
            <!-- <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a class="text-primary" href="/">Home</a></li>
                <li class="breadcrumb-item active text-primary">About Us</li>
            </ol>     -->
        </div>
    </div>

    <!-- Calculator Start -->
<div class="container-fluid emi-calculator mb-5">
    <div class="container pt-5 pb-5">
        <div class="cal-wrapper m-4 wow fadeInUp" data-wow-delay="0.2s">
            <div class="calulator-wrapper">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <div class="calculator" id="calculator">
                            <div class="loan-amount mb-5">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h2>Loan Amount</h2>
                                    <div class="d-flex align-items-center range-number">
                                        <p>₹</p>
                                        <input type="number" id="loanAmountNumber" min="1000000" max="1000000000" value="10000000" oninput="loanAmountRange.value=value">
                                    </div>
                                </div>
                                <input type="range" value="10000000" min="1000000" max="1000000000" id="loanAmountRange" oninput="loanAmountNumber.value=value" step="50000" />
                                <div class="d-flex justify-content-between">
                                    <span>1L</span>
                                    <span>100C</span>
                                </div>
                            </div>
                            <div class="Interest mb-5">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h2>Rate of Interest (p.a)</h2>
                                    <div class="d-flex align-items-center range-number">
                                        <p>%</p>
                                        <input type="number" id="interestNumber" min="1" max="30" value="6" oninput="interestRange.value=value">
                                    </div>
                                </div>
                                <input type="range" value="6" min="1" max="30" id="interestRange" oninput="interestNumber.value=value" step=".1" />
                                <div class="d-flex justify-content-between">
                                    <span>1%</span>
                                    <span>30%</span>
                                </div>
                            </div>
                            <div class="Loan Tenure">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h2>Loan Tenure</h2>
                                    <div class="d-flex align-items-center range-number">
                                        <p>Yr</p>
                                        <input type="number" id="tenureNumber" min="1" max="30" value="5" oninput="tenureRange.value=value">
                                    </div>
                                </div>
                                <input type="range" value="5" min="1" max="30" id="tenureRange" oninput="tenureNumber.value=value" step="1" />
                                <div class="d-flex justify-content-between">
                                    <span>1Yr</span>
                                    <span>30Yr</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 m-auto">
                        <div class="piechart-wrapper">
                            <div class="piechart">
                                <canvas width="1000" height="1000" id="pieChart" style="width:100%; height:100%"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- detail calculation -->
                <div class="details-wrapper">
                    <h2>Detailed Calculation</h2>
                    <div class="details">
                        <div class="row justify-content-between">
                            <div class="col-lg-3 col-sm-6 col-12 details-card">
                                <p>Monthly EMI</p>
                                <bold id="showEmi"></bold>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12 details-card">
                                <p>Principal Amount</p>
                                <bold id="showPrincipal"></bold>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12 details-card">
                                <p>Total Interest</p>
                                <bold id="showInterest"></bold>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12 details-card">
                                <p>Total Amount</p>
                                <bold id="showTotalAmount"></bold>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- table section -->
                <div class="details-table">
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">Month - Year</th>
                            <th scope="col">Principal Amount</th>
                            <th scope="col">Interest Charged</th>
                            <th scope="col">Total EMI</th>
                            <th scope="col">Balance</th>
                            </tr>
                        </thead>
                        <tbody id="tbody">

                        </tbody>
                    </table>
                </div>
                <button class="btn btn-primary mt-4" id="showMoreBtn">View All</button>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>

    <script>
        if (document.getElementById("calculator")) {
        document.getElementsByTagName("body").onload = cal();
        }
        if (document.getElementById("calculator")) {
        // slider styling and color functions
        const rangeInputs = document.querySelectorAll('input[id="loanAmountRange"]');
        const numberInput = document.querySelector('input[id="loanAmountNumber"]');
        function handleInputChange(e) {
            let target = e.target;
            if (e.target.type !== "range") {
            target = document.getElementById("loanAmountRange");
            }
            const min = target.min;
            const max = target.max;
            const val = target.value;
            target.style.backgroundSize = ((val - min) * 100) / (max - min) + "% 100%";
        }
        rangeInputs.forEach((input) => {
            input.addEventListener("input", handleInputChange);
        });
        numberInput.addEventListener("input", handleInputChange);
        // slider styling and color functions

        // Interest styling and color functions
        const interestrangeInputs = document.querySelectorAll(
            'input[id="interestRange"]'
        );
        const interestnumberInput = document.querySelector(
            'input[id="interestNumber"]'
        );
        function handleInterestChange(e) {
            let target = e.target;
            if (e.target.type !== "range") {
            target = document.getElementById("interestRange");
            }
            const min = target.min;
            const max = target.max;
            const val = target.value;
            target.style.backgroundSize = ((val - min) * 100) / (max - min) + "% 100%";
        }
        interestrangeInputs.forEach((input) => {
            input.addEventListener("input", handleInterestChange);
        });
        interestnumberInput.addEventListener("input", handleInterestChange);
        // Interest styling and color functions

        // Loan Tenure styling and color functions
        const tenureInputs = document.querySelectorAll('input[id="tenureRange"]');
        const tenureInput = document.querySelector('input[id="tenureNumber"]');
        function handletenureChange(e) {
            let target = e.target;
            if (e.target.type !== "range") {
            target = document.getElementById("tenureRange");
            }
            const min = target.min;
            const max = target.max;
            const val = target.value;
            target.style.backgroundSize = ((val - min) * 100) / (max - min) + "% 100%";
        }
        tenureInputs.forEach((input) => {
            input.addEventListener("input", handletenureChange);
        });
        tenureInput.addEventListener("input", handletenureChange);
        // Loan Tenure styling and color functions
        }
        //calcualtion function
        function cal() {
        let loanEvent = document.getElementById("loanAmountRange").value;
        let interestEvent = document.getElementById("interestRange").value;
        let tenureEvent = document.getElementById("tenureRange").value;

        let loanAmount = Number(loanEvent);
        let rate = interestEvent;
        let tenure = tenureEvent * 12;
        let r = rate / (12 * 100);
        let emi =
            (loanAmount * r * Math.pow(1 + r, tenure)) / (Math.pow(1 + r, tenure) - 1);
        let interest = emi * tenure - loanAmount;
        let totalAmount = parseFloat(loanAmount) + parseFloat(interest);
        //show Details
        document.getElementById("showEmi").innerHTML =
            "₹" + Number(emi.toFixed(0)).toLocaleString("en-IN");
        document.getElementById("showPrincipal").innerHTML =
            "₹" + Number(loanAmount.toFixed(0)).toLocaleString("en-IN");
        document.getElementById("showInterest").innerHTML =
            "₹" + Number(interest.toFixed(0)).toLocaleString("en-IN");
        document.getElementById("showTotalAmount").innerHTML =
            "₹" + Number(totalAmount.toFixed(0)).toLocaleString("en-IN");
        //pie chart
        let AmountValue = Number(loanAmount);
        let interestValue = Number(interest.toFixed(0));
        // pie chart
        var xValues = ["Loan Amount", "Interest"];
        var yValues = [AmountValue, interestValue];
        var barColors = ["#015fc9", "#ed1c23"];

        var ctx = document.getElementById("pieChart").getContext("2d");
        if (window.myCharts != undefined) window.myCharts.destroy();
        window.myCharts = new Chart(ctx, {
            type: "doughnut",
            data: {
            labels: xValues,
            datasets: [
                {
                backgroundColor: barColors,
                data: yValues,
                borderWidth: "0",
                },
            ],
            },

            options: {
            title: {
                display: true,
            },
            },
        });

        // pie chart
        //table function

        function calculateEMI(principal, rate, duration) {
            const monthlyRate = rate / 1200;
            const numPayments = duration;
            const emi =
            (principal * monthlyRate * Math.pow(1 + monthlyRate, numPayments)) /
            (Math.pow(1 + monthlyRate, numPayments) - 1);
            const monthNames = [
            "January",
            "February",
            "March",
            "April",
            "May",
            "June",
            "July",
            "August",
            "September",
            "October",
            "November",
            "December",
            ];

            // Get the current date and year
            const currentDate = new Date();
            let currentMonth = currentDate.getMonth();
            let currentYear = currentDate.getFullYear();

            let balance = principal;
            let data = "";
            for (let i = 0; i < numPayments; i++) {
            const interest = balance * monthlyRate;
            const principalPaid = emi - interest;
            balance -= principalPaid;
            // Calculate the payment month and year
            let paymentMonth = currentMonth + i + 1;
            let paymentYear = currentYear + Math.floor(paymentMonth / 12);
            paymentMonth %= 12;

            let month = monthNames[paymentMonth];
            let year = paymentYear;
            let monthlyPrincipal = Number(principalPaid.toFixed(0)).toLocaleString(
                "en-IN"
            );
            let monthlyInterest = Number(interest.toFixed(0)).toLocaleString("en-IN");
            let monthlyEmi = Number(emi.toFixed(0)).toLocaleString("en-IN");
            let monthlyBalance = Number(balance.toFixed(0)).toLocaleString("en-IN");
            data += `
                        <tr>
                                            <td>${month}  ${year}</th>
                            <td>₹${monthlyPrincipal}</td>
                            <td>₹${monthlyInterest}</td>
                                            <td>₹${monthlyEmi}</td>
                            <td>₹${monthlyBalance}</td>
                                        </tr>
                `;
            }
            document.getElementById("tbody").innerHTML = data;
        }
        // Declare Values
        var principal = loanAmount;
        var duration = tenure;
        calculateEMI(principal, rate, duration);

        //rows hide show function
        let rows = document.querySelectorAll("tr");
        let showMoreBtn = document.getElementById("showMoreBtn");
        if (rows.length > 10) {
            showMoreBtn.style.display = "block";
        } else {
            showMoreBtn.style.display = "none";
        }
        if (rows.length === 0) {
            showMoreBtn.style.display = "none";
        }

        const initialRows = 10;
        for (let i = initialRows; i < rows.length; i++) {
            rows[i].style.display = "none";
        }
        function showMoreRows() {
            for (let i = 0; i <= rows.length; i++) {
            if (rows[i]) {
                rows[i].style.display = "";
                showMoreBtn.style.display = "none";
            }
            }
        }
        showMoreBtn.addEventListener("click", showMoreRows);
        //rows hide show function
        //cal() end
        }

        //validate input fields
        function validateAmount() {
        let val = document.getElementById("loanAmountNumber").value;
        if (val < 100000 || val > 10000000) {
            document.getElementById("loanAmountNumber").style.cssText = `
                background-color: #f8d9d9;
                border-color: #ff2020;
                color: #ff2020;
                `;
        } else {
            document.getElementById("loanAmountNumber").style.cssText = `
                background-color: #fff;
                border: 1px solid #464646;
                color: #111;
                `;
        }
        }
        function validateInterest() {
        let val = document.getElementById("interestNumber").value;
        if (val < 1 || val > 30) {
            document.getElementById("interestNumber").style.cssText = `
                background-color: #f8d9d9;
                border-color: #ff2020;
                color: #ff2020;
                `;
        } else {
            document.getElementById("interestNumber").style.cssText = `
                background-color: #fff;
                border: 1px solid #464646;
                color: #111;
                `;
        }
        }
        function validateTenure() {
        let val = document.getElementById("tenureNumber").value;
        if (val < 1 || val > 30) {
            document.getElementById("tenureNumber").style.cssText = `
                background-color: #f8d9d9;
                border-color: #ff2020;
                color: #ff2020;
                `;
        } else {
            document.getElementById("tenureNumber").style.cssText = `
                background-color: #fff;
                border: 1px solid #464646;
                color: #111;
                `;
        }
        }
        if (document.getElementById("calculator")) {
        document.getElementById("loanAmountRange").addEventListener("change", cal);
        document.getElementById("interestRange").addEventListener("change", cal);
        document.getElementById("tenureRange").addEventListener("change", cal);
        document
            .getElementById("loanAmountNumber")
            .addEventListener("keyup", cal, true);
        document
            .getElementById("loanAmountNumber")
            .addEventListener("keyup", validateAmount, true);
        document
            .getElementById("interestNumber")
            .addEventListener("keyup", cal, true);
        document
            .getElementById("interestNumber")
            .addEventListener("keyup", validateInterest, true);
        document.getElementById("tenureNumber").addEventListener("keyup", cal, true);
        document
            .getElementById("tenureNumber")
            .addEventListener("keyup", validateTenure, true);
        }

        //initailize function
    </script>
</div>
<!-- Calculator End -->
@endsection

