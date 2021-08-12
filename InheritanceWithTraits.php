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
            print "Master";
        }
    }

    class junior extends master
    {
        use a;
    }

    $obj=new junior();
    $obj->hello();
?>
