# Slow Flip Spreadsheet Updates - Taxes & Insurance Formulas

Based on your Google Sheet, here are the exact formulas to add taxes and insurance to your calculations.

## Current Structure Analysis

Your spreadsheet shows:
- **Buy Price:** $30,000 at 12% for 5 years → $667.33/month
- **Sell Price:** $89,000 with $3,500 down, $85,500 financed at 13% for 34 years → $975.31/month
- **Taxes:** Currently shows 1.5% = $450/year = $37.50/month (but not included in cash flow)
- **Insurance:** Not currently included

## Recommended Updates

### 1. Add Insurance Estimate Cell
**Location:** Right after the Taxes row (Row 5)

**Add this row:**
```
Insurance: 0.5%, $150, $13
```
- **Cell B5:** `Insurance`
- **Cell C5:** `0.5%` (or your actual insurance rate)
- **Cell D5:** `=C3*C5` (calculates annual insurance: $89,000 × 0.5% = $445)
- **Cell E5:** `=D5/12` (monthly insurance: $445 ÷ 12 = $37.08)

### 2. Update Cash Flow Calculations

**Current Cash Flow (Row 3, Column M):** `$307.97`
This is calculated as: `$975.31 (buyer payment) - $667.33 (lender payment)`

**Updated Cash Flow with Taxes & Insurance:**
```
= $975.31 - $667.33 - $37.50 (taxes) - $37.08 (insurance)
= $233.40
```

**Formula to update Cell M3:**
```
=J3-K3-D4/12-D5/12
```
Where:
- `J3` = Buyer payment ($975.31)
- `K3` = Lender payment ($667.33)  
- `D4/12` = Monthly taxes ($450 ÷ 12 = $37.50)
- `D5/12` = Monthly insurance ($445 ÷ 12 = $37.08)

### 3. Update Annual Cash Flow (Cell N3)

**Current:** `$3,695.69` (monthly × 12)

**Updated Formula for Cell N3:**
```
=M3*12
```
This will now show: `$233.40 × 12 = $2,800.80`

### 4. Add Total Monthly PITI (Principal, Interest, Taxes, Insurance)

**Add a new row after Insurance:**
```
Total PITI: , , , $1,049.89
```
- **Cell B6:** `Total PITI`
- **Cell E6:** `=J3+D4/12+D5/12` (Buyer payment + monthly taxes + monthly insurance)

### 5. Update Buyer's Actual Payment

The buyer's contract says they pay taxes and insurance separately, but for your cash flow analysis, you should account for these costs.

**Alternative Approach - Escrow Account:**
If you collect taxes/insurance from buyer and pay them yourself:

**Add Escrow Collection Row:**
```
Escrow Collected: , , , $74.58
```
- **Cell B7:** `Escrow Collected`
- **Cell E7:** `=D4/12+D5/12` (monthly taxes + insurance)

**Your Net Cash Flow Then Becomes:**
```
= $975.31 (principal/interest) + $74.58 (escrow) - $667.33 (lender) - $74.58 (pay taxes/insurance)
= $307.97 (same as original)
```

### 6. Complete Formula Implementation

**Here's exactly what to add to your spreadsheet:**

| Row | Column B | Column C | Column D | Column E |
|-----|-----------|-----------|-----------|-----------|
| 5   | Insurance | `0.5%` | `=C3*C5` | `=D5/12` |
| 6   | Total PITI | | | `=J3+D4/12+D5/12` |
| 7   | Escrow Collected | | | `=D4/12+D5/12` |

**Update Cell M3 (Monthly Cash Flow):**
```
=IF(ISBLANK(E7), J3-K3-D4/12-D5/12, J3+E7-K3-D4/12-D5/12)
```
This formula checks if you're collecting escrow (E7) and adjusts accordingly.

**Update Cell N3 (Annual Cash Flow):**
```
=M3*12
```

## Realistic Numbers for Evansville, IN

Based on Vanderburgh County, Indiana:

### Property Taxes:
- **Actual Rate:** ~1.2-1.8% of assessed value
- **For $89,000 property:** $1,068 - $1,602 annually
- **Monthly:** $89 - $133.50

### Insurance:
- **Rental Property Insurance:** 0.5-1.0% of value
- **For $89,000 property:** $445 - $890 annually  
- **Monthly:** $37.08 - $74.17

### Recommended Conservative Estimates:
```
Taxes: 1.5% = $1,335/year = $111.25/month
Insurance: 0.75% = $667.50/year = $55.63/month
Total Monthly: $166.88
```

## Updated Cash Flow Scenarios

### Scenario 1: Buyer Pays Directly (Current Contract)
- **Your Monthly Cash Flow:** $975.31 - $667.33 = $307.98
- **Buyer's Total Cost:** $975.31 + taxes + insurance
- **Risk:** Buyer might not pay taxes/insurance

### Scenario 2: You Collect Escrow (Recommended)
- **Escrow Collected:** $166.88/month
- **Your Payment to Lender:** $667.33/month  
- **Tax/Insurance Payments:** $166.88/month
- **Your Net Cash Flow:** $975.31 + $166.88 - $667.33 - $166.88 = $307.98
- **Benefit:** You ensure taxes/insurance are paid

### Scenario 3: Include in Monthly Payment
- **Increase buyer payment to:** $975.31 + $166.88 = $1,142.19
- **Your Cash Flow:** $1,142.19 - $667.33 - $166.88 = $307.98
- **Benefit:** Simpler for buyer, you handle payments

## Implementation Steps

1. **Add the new rows** (Insurance, Total PITI, Escrow Collected)
2. **Update the cash flow formula** in Cell M3
3. **Test with different tax/insurance rates**
4. **Consider adding a "Tax/Insurance Assumptions" section**

## Formula Reference

**Monthly Taxes:** `=AssessedValue*TaxRate/12`
**Monthly Insurance:** `=PropertyValue*InsuranceRate/12`
**Total Monthly PITI:** `=MonthlyPayment+MonthlyTaxes+MonthlyInsurance`
**Your Cash Flow:** `=BuyerPayment+EscrowCollected-LenderPayment-TaxInsurancePayments`

## Important Notes

1. **Indiana Property Taxes:** Paid semi-annually (May & November)
2. **Insurance:** Typically paid annually
3. **Escrow Timing:** Need to collect enough before payments are due
4. **Contract Language:** Ensure your contract allows escrow collection

Would you like me to create a modified version of your spreadsheet with these formulas already implemented?