<?php
	class Aluno{
		private $nome;
		private $idade;
		
		
		public function getNome($n){
			$this->nome = $n;
		}
		public function getIdade($i){
			$this->idade = $i;
		}	

		public function setNome(){
			return $this->nome;
			
		}
		public function setIdade(){
			return $this->idade;
			
		}
			
		
	}

?>