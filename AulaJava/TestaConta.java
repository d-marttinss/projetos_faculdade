import java.util.Scanner;

public class TestaConta {
	public static void main(String[] args) {
		int op = 0;
		Scanner scan = new Scanner(System.in);
		
		ContaBancaria conta1 = new ContaBancaria();
		System.out.println("Digite seu nome");
		 conta1.trocarNome(scan.nextLine());
		 conta1.saldoConta = 100;
		 
		 
		while(op != 4) {
			
			System.out.println("Esolha uma das op��es abaixo:");
			 System.out.println(" Op��o 1 - Sacar");
			 System.out.println(" Op��o 2 - Depositar");
			 System.out.println(" Op��o 3 - Consultar Saldo");
			 System.out.println(" Op��o 4 - Sair");
			 op = scan.nextInt();
			 
			 switch(op) {
			 	case 1:
			 		System.out.println("Qual o valor de saque");
			 		conta1.sacar(scan.nextFloat());
			 		break;
			 	case 2:
			 		System.out.println("Qual o valor de deposito");
			 		conta1.deposito(scan.nextFloat());
			 		break;
			 	case 3:
			 		System.out.println(conta1.consultarSaldo());
			 		break;
			 	case 4:
			 		System.out.println("Obrigado por usar nosso banco");
			 		break;
			 }
		}	  
	}
}
