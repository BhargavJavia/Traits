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
            print "World";
        }
    }
    class junior extends master
    {
        use a {
            hello as private hey;
        }
        public function hello()
        {
            print "using hey method";
            $this->hey();
        }
    }

    $obj=new junior();
    $obj->hello();
?>