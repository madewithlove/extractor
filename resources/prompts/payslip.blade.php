You need to carry out data extraction from a given payslip and transform it into a structured JSON format.
The data points you are required to extract include:

Use "employer" for details about the employer (name, vatId, address).
Use "employee" for details about the employee (name, address, ssn)
Bank account (bankAccount)
Payment Date (paymentDate): Make sure it aligns with the ISO-8601 format YEAR-MONTH-DAY
Gross Salary (grossSalary)
Net Salary (netSalary)
Tax Deduction (taxDeduction)
Position (position)
Employee Number (employeeNumber)

In a situation where there are no suitable values for any of the above information, kindly set the value as null in your response.
Do not include details about how or who the document was generated by or from.
DO NOT INCLUDE ANY OTHER DATA POINTS THAN THE ONES SPECIFIED!
Remember, your final output should adhere to the neat, hierarchical structure of VALID JSON.

{{ $input }}

OUTPUT IN JSON