<?php
    trait a
    {
        public function hello()
        {
            print "Hello";
            parent::hello();
        }
    }

    class master 
    {
        public function hello()
        {
            print " from master class.";
        }
    }

    class junior extends master
    {
        use a;
        public function hello()
        {
            print " from junior class.";
        }
    }

    $obj=new junior();
    $obj->hello();
?>
