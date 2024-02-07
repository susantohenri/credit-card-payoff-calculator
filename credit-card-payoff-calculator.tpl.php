<div id="mortgage_loan_payoff_calculator" class="calx">

  <!-- Begin: Credit Card Info -->
  <p class="calx-title">Credit Card Info</p>

  <div class="calx-row-double">
    <div class="calx-col-6">
      <p class="calx-label">
        <span>Current Balance</span>
      </p>
      <input type="text" class="calx-input" data-cell="C5" data-format="$0,0.00" data-formula="" value="5000">
    </div>

    <div class="calx-col-6">
      <p class="calx-label">
        <span>Interest Rate</span>
      </p>
      <input type="text" class="calx-input" data-cell="C6" data-format="0,0.00%" data-formula="" value="17.5">
    </div>
  </div>

  <div class="calx-row-single">
    <p class="calx-label">
      <span>Interest-Only Payment</span>
    </p>
    <input type="text" class="calx-input calx-output" readonly data-cell="C7" data-format="$0,0.00" data-formula="C5*C6/12" value="72.92">
  </div>
  <!-- End: Credit Card Info -->

  <!-- Begin: Calculate Months to Payoff -->
  <p class="calx-title">A. Calculate Months to Payoff</p>

  <div class="calx-row-single">
    <p class="calx-label">
      <span>Monthly Payment</span>&nbsp;
      <small>(Needs to be greater than the interest-only payment)</small>
    </p>
    <input type="text" class="calx-input" data-cell="C10" data-format="$0,0.00" data-formula="" value="120">
  </div>

  <div class="calx-row-double">
    <div class="calx-col-6">
      <p class="calx-label">
        <span>Months to Payoff</span>
      </p>
      <div class="calx-input calx-output">
        <span data-cell="C13" data-format="0,0.00" data-formula="IF(C10=0,' - ',NPER(C6/12,C10,-C5))">64.62</span>
        &nbsp;<small data-cell="D13" data-format="" data-formula="IF(ROUND(C13/12,2) &gt; 0, CONCAT('(', ROUND(C13/12,2), ' years)'), '')">(5.39 years)</small>
      </div>
    </div>

    <div class="calx-col-6">
      <p class="calx-label">
        <span>Total Interest</span>
      </p>
      <input type="text" class="calx-input calx-output" readonly data-cell="C14" data-format="$0,0.00" data-formula="IF(C10=0,' - ',C13*C10-C5)" value="2754.43">
    </div>
  </div>
  <!-- End: Calculate Months to Payoff -->

  <!-- Begin: Calculate Monthly Payment -->
  <p class="calx-title">B. Calculate Monthly Payment</p>

  <div class="calx-row-single">
    <p class="calx-label">
      <span>Payoff Goal (Months)</span>
    </p>
    <input class="calx-input" type="text" data-cell="C17" data-format="" data-formula="" value="36">
    <span data-cell="C18" data-format="" data-formula="CONCAT('(', ROUND(C17/12,2), ' years)')"></span>
  </div>

  <div class="calx-row-double">
    <div class="calx-col-6">
      <p class="calx-label">
        <span>Monthly Payment</span>
      </p>
      <input type="text" class="calx-input calx-output" data-cell="C19" data-format="$0,0.00" data-formula="IF(C17=0,' - ',PMT(C6/12,C17,-C5))" value="179.51"></td>
    </div>

    <div class="calx-col-6">
      <p class="calx-label">
        <span>Total Interest</span>
      </p>
      <input type="text" class="calx-input calx-output" readonly data-cell="C20" data-format="$0,0.00" data-formula="IF(C17=0,' - ',C19*C17-C5)" value="1462.37">
    </div>
  </div>
  <!-- End: Calculate Monthly Payment -->
</div>