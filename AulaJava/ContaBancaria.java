
public class ContaBancaria {
	 String nomeConta;
	 int numeroConta;
	 float saldoConta;
	
	public void sacar (float vlrSaque) {
		this.saldoConta -= vlrSaque;
	}
	
	public void deposito (float vlrDeposito) {
		this.saldoConta += vlrDeposito;
	}
	
	public float consultarSaldo () {
		return this.saldoConta;
	}
	
	public String consultarNome () {
		return this.nomeConta;
	}
	
	public void trocarNome (String novoNome) {
		this.nomeConta = novoNome;
	}
	
}