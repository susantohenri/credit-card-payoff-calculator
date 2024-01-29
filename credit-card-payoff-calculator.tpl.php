<div id="mortgage_loan_payoff_calculator" class="calx">
  <table>

    <!-- Begin: Credit Card Info -->
    <tr>
      <th data-cell="B4" data-format="" data-formula="" colspan="2">Credit Card Info</th>
    </tr>
    <tr>
      <td data-cell="B5" data-format="" data-formula=""><b>Current Balance</b></td>
      <td>
        <input type="text" data-cell="C5" data-format="$0,0.00" data-formula="" value="5000">
      </td>
    </tr>
    <tr>
      <td data-cell="B6" data-format="" data-formula=""><b>Interest Rate</b></td>
      <td>
        <input type="text" data-cell="C6" data-format="0,0.00%" data-formula="" value="17.5">
      </td>
    </tr>
    <tr>
      <td data-cell="B7" data-format="" data-formula="">Interest-Only Payment</td>
      <td data-cell="C7" data-format="$0,0.00" data-formula="C5*C6/12">72.92</td>
    </tr>
    <tr>
      <td data-cell="B8" data-format="" data-formula="" colspan="2">&nbsp;</td>
    </tr>
    <!-- End: Credit Card Info -->

    <!-- Begin: Calculate Months to Payoff -->
    <tr>
      <th data-cell="B9" data-format="" data-formula="" colspan="2">A. Calculate Months to Payoff</th>
    </tr>
    <tr>
      <td data-cell="B10" data-format="" data-formula=""><b>Monthly Payment</b></td>
      <td>
        <input type="text" data-cell="C10" data-format="$0,0.00" data-formula="" value="120">
      </td>
    </tr>
    <tr>
      <td data-cell="B11" data-format="" data-formula="" colspan="2">
        <small>(Needs to be greater than the interest-only payment)</small>
      </td>
    </tr>
    <tr>
      <td data-cell="B13" data-format="" data-formula="">Months to Payoff</td>
      <td class="parent-c13">
        <span data-cell="C13" data-format="0,0.00" data-formula="IF(C10=0,' - ',NPER(C6/12,C10,-C5))">64.62</span>
        <small data-cell="D13" data-format="" data-formula="IF(ROUND(C13/12,2) &gt; 0, CONCAT('(', ROUND(C13/12,2), ' years)'), '')">(5.39 years)</small>
      </td>
    </tr>
    <tr>
      <td data-cell="B14" data-format="" data-formula="">Total Interest</td>
      <td data-cell="C14" data-format="$0,0.00" data-formula="IF(C10=0,' - ',C13*C10-C5)">2754.43</td>
    </tr>
    <tr>
      <td data-cell="B15" data-format="" data-formula="" colspan="2">&nbsp;</td>
    </tr>
    <!-- End: Calculate Months to Payoff -->

    <!-- Begin: Calculate Monthly Payment -->
    <tr>
      <th data-cell="B16" data-format="" data-formula="" colspan="2">B. Calculate Monthly Payment</th>
    </tr>
    <tr>
      <td data-cell="B17" data-format="" data-formula=""><b>Payoff Goal (Months)</b></td>
      <td>
        <input type="text" data-cell="C17" data-format="" data-formula="" value="36">
      </td>
    </tr>
    <tr>
      <td></td>
      <td data-cell="C18" data-format="" data-formula="CONCAT('(', ROUND(C17/12,2), ' years)')"></td>
    </tr>
    <tr>
      <td data-cell="B19" data-format="" data-formula="">Monthly Payment</td>
      <td data-cell="C19" data-format="$0,0.00" data-formula="IF(C17=0,' - ',PMT(C6/12,C17,-C5))">179.51</td>
    </tr>
    <tr>
      <td data-cell="B20" data-format="" data-formula="">Total Interest</td>
      <td data-cell="C20" data-format="$0,0.00" data-formula="IF(C17=0,' - ',C19*C17-C5)">1462.37</td>
    </tr>
    <!-- End: Calculate Monthly Payment -->

  </table>
</div>