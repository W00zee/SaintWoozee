<?php namespace levkina;

Class LinearEquation{
	public function solveLinearEquation(float $a, float $b): array {
			
			if($a == 0){
                throw new LevkinaException("Ошибка: уравнения не существует.");
			}
            \levkina\MyLog::log("Определено, что это линейное уравнение");
			return $this->X=array(-($b/$a));
	}
	
	protected $X;
}

?>