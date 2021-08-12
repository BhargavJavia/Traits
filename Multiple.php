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
        public function world()
        {
            print "World";
        }
    }

    class c
    {
        use a;
        use b;
    }

    $obj=new c;
    $obj->hello();
    $obj->world();
?>
