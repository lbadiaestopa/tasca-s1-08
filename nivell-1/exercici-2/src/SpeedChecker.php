<?php

class SpeedChecker
{
	public function getSpeedThreshold(int $speed): string
	{
		if ($speed < 30) return "Molt lent";
		if ($speed <= 60) return "Velocitat adequada";
		if ($speed <= 80) return "Excés lleu";
		if ($speed <= 100) return "Excés moderat";

		return "Excés greu";
	}
}
