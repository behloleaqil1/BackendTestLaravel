@extends('main')
@section('content')
    <div class="container">
        <h2>Loan Details</h2>
        <p><strong>Loan Amount:</strong> ${{ number_format($loanAmount, 2) }}</p>
        <p><strong>Annual Interest Rate:</strong> {{ $annualInterestRate }}%</p>
        <p><strong>Loan Term:</strong> {{ $loanTerm }} years</p>
        <p><strong>Effective Interest Rate:</strong> {{ number_format($annualInterestRate, 2) }}%</p>

        <h2>Amortization Schedule</h2>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Month</th>
                <th>Starting Balance</th>
                <th>Monthly Payment</th>
                <th>Principal Component</th>
                <th>Interest Component</th>
                <th>Extra Repayment</th>
                <th>Ending Balance</th>
                <th>Remaining Loan Term</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($amortizationSchedule as $schedule)
                <tr>
                    <td>{{ $schedule['month_number'] }}</td>
                    <td>${{ number_format($schedule['starting_balance'], 2) }}</td>
                    <td>${{ number_format($schedule['monthly_payment'], 2) }}</td>
                    <td>${{ number_format($schedule['principal_component'], 2) }}</td>
                    <td>${{ number_format($schedule['interest_component'], 2) }}</td>
                    <td>${{ number_format($schedule['extra_repayment'], 2) }}</td>
                    <td>${{ number_format($schedule['ending_balance'], 2) }}</td>
                    <td>{{ $schedule['remaining_loan_term'] }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <h2>Extra Repayment Schedule</h2>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Month</th>
                <th>Starting Balance</th>
                <th>Monthly Payment</th>
                <th>Principal Component</th>
                <th>Interest Component</th>
                <th>Extra Repayment</th>
                <th>Ending Balance</th>
                <th>Remaining Loan Term</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($extraRepaymentSchedule as $schedule)
                <tr>
                    <td>{{ $schedule['month_number'] }}</td>
                    <td>${{ number_format($schedule['starting_balance'], 2) }}</td>
                    <td>${{ number_format($schedule['monthly_payment'], 2) }}</td>
                    <td>${{ number_format($schedule['principal_component'], 2) }}</td>
                    <td>${{ number_format($schedule['interest_component'], 2) }}</td>
                    <td>${{ number_format($schedule['extra_repayment'], 2) }}</td>
                    <td>${{ number_format($schedule['ending_balance'], 2) }}</td>
                    <td>{{ $schedule['remaining_loan_term'] }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
