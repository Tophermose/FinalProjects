import java.util.Scanner;
import java.io.*;
public class CompoundInterest
{
   public static void main(String[] args) throws IOException
   {  
      
      CompoundInterestMethod henry = new CompoundInterestMethod("Henry Adams", "5447 West 29th Street", "(843) 679-5861");
      
      Scanner keyboard = new Scanner(System.in);
      
      henry.setPrincipalAmount(keyboard);
      henry.setAnnualRate(keyboard);
      henry.setYearsNum(keyboard);
      
      henry.menu(keyboard);
      System.exit(0);
   }
}