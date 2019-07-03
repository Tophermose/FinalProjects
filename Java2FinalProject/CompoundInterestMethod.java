//Printing to files works in WordPad and Microsoft Word, but not in NotePad!
import java.io.*;
import java.util.Scanner;
import java.text.DecimalFormat;
public class CompoundInterestMethod
{
   private String name, address, phoneNumber, input;
   private double principalAmount, yearsNum, rate, formulaPartOne, copyFPOne;
   private double amount, interest, balance, principal;
   private int i, choice;
   private final int MONTHS = 12;
   Scanner keyboard = new Scanner(System.in);
   DecimalFormat df = new DecimalFormat("0.00");
   
   public CompoundInterestMethod(String s, String a, String n) 
   {
      name = s;
      address = a;
      phoneNumber = n;
   }
   
   //Accessors and Mutators 
   
   public void setYearsNum(Scanner bry)
   {  
      System.out.println("What is the number of years the money is borrowed or deposited for?");
      yearsNum = bry.nextDouble();
   }
   
   public double getYearsNum()
   {
      return yearsNum;
   }
   
   public void setAnnualRate(Scanner ary)
   {
      System.out.println("What is the annual rate of interest in a percentage?");
      rate = keyboard.nextDouble();
   }
   
   public double getAnnualRate()
   {
      return (rate / 100);
   }
   
   public void setPrincipalAmount(Scanner bry)
   {
      System.out.println("What is the principal amount?"); 
      principalAmount = bry.nextDouble();
   }
   
   public double getPrincipalAmount()
   {
      return principalAmount;
   }
   
   //The number of pay periods.
   public double getNumMonths()
   {
      return getYearsNum() * MONTHS;
   }
   
   //The part of the amortized loan to be used by the exponent.
   public double getFormulaPartOne()
   {
      return (1 + periodInterestRate()); //(1+r)
   }
   
   /*The process of creating the number to the 
   power of the total number of payments by creating a copy of the formula, 
   then multiplying it by the original formulaPartOne, making it work as an
   exponent.*/
   public double getAmortizedLoanPart()
   {
      formulaPartOne = getFormulaPartOne();
      copyFPOne = formulaPartOne;
      int i = 1;
      while(i < getNumMonths())
      {
         formulaPartOne *= copyFPOne;
         i++;
      }
      return formulaPartOne;
   }
   
   /*The interest rate per pay period,
   gotten by dividing the annual rate by 
   the number of months in a year.*/
   public double periodInterestRate()
   {
      return getAnnualRate() / MONTHS;
   }
   
   //The numerator of the Amortized Loan equation.
   public double getAmortizedLoanNumerator()
   {
      return periodInterestRate() * getAmortizedLoanPart();
   }
   
   //The denominator of the Amortized Loan equation
   public double getAmortizedLoanDenominator()
   {
      return getAmortizedLoanPart() - 1;
   }
   
   /*The number of fixed monthly payments, where
   r is the interest rate per pay period,
   n is the total number of payments,
   P is the intial loan amount, and
   A is is the payment per period*/
   public double monthlyPayment()
   {  
      return getPrincipalAmount() * getAmortizedLoanNumerator() / getAmortizedLoanDenominator();
      //A = P((r(1+r))^n)/((1+r)^n - 1) This is the equation I used.
   }
   
   //The print statement when printed in the compiler. 
   public void printStatement()
   {
      System.out.println("Borrower's Name: " + name);
      System.out.println("Borrower's Address: " + address);
      System.out.println("Borrower's Phone: " + phoneNumber);
      System.out.println("Loan Amount: $" + df.format(getPrincipalAmount()));
      System.out.println("APR: " + df.format(getAnnualRate() * 100) + "%");
      System.out.println("Fixed Monthly Payment: $" + df.format(monthlyPayment()));
      System.out.println(amortization());
   }
   
   
   //The print statement when printing to a file.
   public String printStatementB()
   {
      String str = "Borrower's Name: " + name +
                   "\r\nBorrower's Address: " + address +
                   "\r\nBorrower's Phone: " + phoneNumber +
                   "\r\nLoan Amount: $" + df.format(getPrincipalAmount()) +
                   "\r\nAPR: " + df.format(getAnnualRate() * 100) + "%" +
                   "\r\nNumber of Payments: " + getNumMonths() +  
                   "\r\nFixed Monthly Payment: $" + df.format(monthlyPayment()) +
                   "\r\n" + amortizationB(); //Line break in file based on OS. It is \r\n for Windows
      return str;
   }
   
   //The menu that will let the user choose to print to a document or the file.
   public void menu(Scanner cry) throws IOException
   {
      System.out.println("Hello! \n would you like to:\n1. See the financial statement or " +
      "\n2. Print the financial statement to a file?\nPlease enter \"1\" or \"2.\"");
      choice = cry.nextInt();
         if(choice == 1)
            printStatement();
         else if(choice == 2)
         {
            Scanner key = new Scanner(System.in);
            System.out.println("What is the name of the file?");
            input = key.nextLine();
     
            FileWriter fw = new FileWriter(input, true);
            PrintWriter pwriter = new PrintWriter(fw);
            pwriter.println(printStatementB());
            pwriter.close();
         }
         else
            System.out.println("That is not a correct number.");
   }  
   
   /*The first amortization return statement,
   using StringBuilder to return the strings 
   from inside the for loop.*/
   public String amortization()
   {
      String str;
      StringBuilder sb = new StringBuilder();
      String print1 = String.format("%1s\t%1s\t\t%1s\t%1s\t%1s\n", "Payment", "Amount ", "Principal ", "Intesest ", "Balance ");
      amount = monthlyPayment();
      interest = (getPrincipalAmount() * periodInterestRate());
      principal = monthlyPayment() - interest;
      balance = getPrincipalAmount();
      for(i = 1; i <= getNumMonths(); i++)
      {
         amount = monthlyPayment();
         balance -= principal;
         interest = (amount - principal);
         principal += principal * periodInterestRate();
         String print2 = String.format("%1d\t$%.2f\t\t$%.2f\t\t$%.2f\t\t$%.2f\n", i, amount, principal, interest, balance);
         sb.append(print2);
      }
      str = "\n" + print1 + sb.toString() + "\n";
      return str;
   }
   
   /*The second amortization return statement,
   using StringBuilder to return the strings 
   from inside the for loop.*/
   public String amortizationB()
   {
      String str;
      StringBuilder sb = new StringBuilder();
      String print1 = String.format("%1s\t%1s\t%1s\t%1s\t%1s\n", "Payment", "Amount ", "Principal ", "Intesest ", "Balance ");
      amount = monthlyPayment();
      interest = (getPrincipalAmount() * periodInterestRate());
      principal = monthlyPayment() - interest;
      balance = getPrincipalAmount();
      for(i = 1; i <= getNumMonths(); i++)
      {
         String print2;
         amount = monthlyPayment();
         balance -= principal;
         interest = (amount - principal);
         principal += principal * periodInterestRate();
         if(i < 98)
         {
            print2 = String.format("%1d\t\t$%.2f\t$%.2f\t$%.2f\t$%.2f\n", i, amount, principal, interest, balance);
            sb.append(print2);
         }
         else if(i >=98)
         {
            print2 = String.format("%1d\t\t$%.2f\t$%.2f\t$%.2f\t\t$%.2f\n", i, amount, principal, interest, balance);
            sb.append(print2);
         }
      }
      str = "\n" + print1 + sb.toString() + "\n";
      return str;
   }


}     