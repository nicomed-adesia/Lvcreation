<?php
    namespace App;

    class Panier{

        public $items = null;
        public $totalQty = 0;
        public $totalPrice = 0;


        public function __construct($oldCart){
            
            if($oldCart){
                $this->items = $oldCart->items;
                $this->totalQty = $oldCart->totalQty;
                $this->totalPrice  = $oldCart->totalPrice ;
                // $this->totalPrice = $oldCart->totalPrice;
            }

        }

        public function add($item, $service_id){

            $storedItem = ['qty' => 0, 'service_id' => 0, 'nomService' => $item->nomService,
        'tarifService' => $item->tarifService, 'imageService' => $item->imageService, 'item' =>$item];

        if($this->items){
            if(array_key_exists($service_id, $this->items)){
                $storedItem = $this->items[$service_id];
            }
        }

        $storedItem['qty']++;
        $storedItem['service_id'] = $service_id;
        $storedItem['nomService'] = $item->nomService;
        $storedItem['tarifService'] = $item->tarifService;
        $storedItem['imageService'] = $item->imageService;
        $this->totalQty++;
        $this->totalPrice += $item->tarifService;
        $this->items[$service_id] = $storedItem;

        }
        public function updateQty($id, $qty){
            $this->totalQty -= $this->items[$id]['qty'];
            $this->totalPrice -= $this->items[$id]['tarifService'] * $this->items[$id]['qty'];
            $this->items[$id]['qty'] = $qty;
            $this->totalQty += $qty;
            $this->totalPrice += $this->items[$id]['tarifService'] *$this->items[$id]['qty'];

        }
        public function removeItem($id){
            $this->totalQty -= $this->items[$id]['qty'];
            $this->totalPrice -= $this->items[$id]['tarifService'] * $this->items[$id]['qty'];
            unset($this->items[$id]);
        }
    }
?>