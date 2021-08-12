<?php
    trait a
    {
        public function hello()
        {
            print "Hello World";
        }
    }

    class b
    {
        use a;
    }

    $obj=new b();
    $obj->hello();
?>
