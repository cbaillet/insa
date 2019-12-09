<?php
/**
 * Gestion de poneys
 */
class Poneys
{
    private $count = 8;

    /**
     * Retourne le nombre de poneys
     *
     * @return void
     */
    public function getCount(): int
    {
        return $this->count;
    }
    
    /**
     * Set le nombre de poneys
     *
     * @return void
     */
    public function setCount($i): void
    {
        $this->count = $i;
    }

    /**
     * Retire un poney du champ
     *
     * @param int $number Nombre de poneys à retirer
     *
     * @return void
     */
    public function removePoneyFromField(int $number): void
    {
        if ($this->count < $number){
            throw new Exception("Il ne peut pas y avoir moins de poney qu'ils en existent.") ;
        }
        else{
            $this->count -= $number;
        }
        
    }

    /**
     * ajoute un poney du champ
     *
     * @param int $number Nombre de poneys à ajouter
     *
     * @return void
     */
    public function addPoneyFromField(int $number): void
    {
        $this->count += $number;
    }

    /**
     * Retourne les noms des poneys
     *
     * @return array
     */
    public function getNames(): array
    {

    }

    /**
     * Savoir si il reste de la place pour les poneys
     *
     * @return bool
     */
    public function isFree(): bool
    {
        if ($this->count >= TCHAMP)
        {
            return(False);
        }
        else
        {
            return(True);
        }
    }
}
?>
