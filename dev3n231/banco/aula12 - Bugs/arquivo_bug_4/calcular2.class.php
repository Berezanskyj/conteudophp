<?php
	class Calcular{
		private $valor1;
		private $valor2;
		private $operacao;
		
		public function setValor1($valor1){
			$this->valor1 = $valor1;
		}
		public function setValor2($valor2){
			$this->valor2 = $valor2;
		}
		public function setOperacao($operacao){
			$this->operacao = $operacao;
		}
		public function getValor1(){
			return $this->valor1;
		}
		public function getValor2(){
			return $this->valor2;
		}
		public function getOperacao(){
			return $this->operacao;
		}
		public function soma(){
			$soma = $this->valor1 + $this->valor2;
			return $soma;
		}
		public function subtracao(){
			$sub = $this->valor1 - $this->valor2;
			return $sub;
		}
		public function multi(){
			$multi = $this->valor1 * $this->valor2;
			return $multi;
		}
		public function div(){
			$div = $this->valor1 / $this->valor2;
			return $div;
		}
		
		public function matematicas() {
			switch ($this->operacao) {
				case '+':
					return $this->soma();
				case '-':
					return $this->subtracao();
				case '*':
					return $this->multi();
				case '/':
					return $this->div();
				default:
					return "Erro na matrix!";
			}
		}
	}
	
	
	
	
?>