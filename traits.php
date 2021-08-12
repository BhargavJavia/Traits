<?php
    trait a
    {
        public function hello()
        {
            print "Hello";
            $this->world();
        }
    }

    class master
    {
        public function world()
        {
            print "from master class.";
        }
    }

    class junior extends master
    {
        use a {
            hello as private hey;
        }

        public function world()
        {
            print "from junior class.";
        }
    }

    $obj=new junior();
    $obj->hello();
?>
