/**
 JAVAs
**/

class SignletonBD{

	private static SignletonBD connexionBD = null; // l'attribut instance

	private SignletonBD(){
		// jbdc
		// connection avec le jdbc
	}
	
	public static SignletonBD getInstance(){

		if(connexionBD == null){
			connexionBD = new SignletonBD();
		}

		return connexionBD;
	}


}

class Personne{

	public void afficherPersonne(){
		SignletonBD bd = SignletonBD.getInstance();
		SignletonBD bd1 = SignletonBD.getInstance();
		SignletonBD bd2 = SignletonBD.getInstance();
		SignletonBD bd3 = SignletonBD.getInstance();
	}
}






