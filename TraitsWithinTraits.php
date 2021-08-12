<?php
    trait a
    {
        public function hello()
        {
            print "Hello";
        }
    }

    trait b
    {
        use a;

        public function all()
        {
            print "All";
        }
    }

    class c
    {
        use b;
    }

    $obj=new c;
    $obj->hello();
    $obj->all();
?>