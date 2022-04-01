
public class ContaBancaria {
	 String nome;
	 int numeroConta;
	 float saldo;
	
	public void sacar (float vlrSaque) {
		this.saldo -= vlrSaque;
	}
	
	public void deposito (float vlrDeposito) {
		this.saldo -= vlrDeposito;
	}
	
	public float consultarSaldo () {
		return this.saldo;
	}
	
	public String consultarNome () {
		return this.nome;
	}
	
	public void trocarNome (String novoNome) {
		this.nome = novoNome;
	}
	
}
