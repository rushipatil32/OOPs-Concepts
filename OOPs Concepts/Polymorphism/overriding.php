<?php
class Machine{

    public function mechanicalWork() {

        echo "I can do All Mechanical Work\n";
    }

}
class Grinder extends Machine {

    public function mechanicalWork() {
    
        echo "I can grinde anything\n";
    }

}
$machine = new Machine();
$machine ->mechanicalWork();
$grinder = new Grinder();
$grinder -> mechanicalWork();
?>