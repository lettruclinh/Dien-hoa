<?php

namespace App;

class GioHang
{
	public $items = null;
	public $sl_tong = 0;
	public $gia_tong = 0;

	public function __construct($oldCart){
		if($oldCart){
			$this->items = $oldCart->items;
			$this->sl_tong = $oldCart->sl_tong;
			$this->gia_tong = $oldCart->gia_tong;
		}
	}

	public function add($item, $id){
		$dongia_khuyenmai = $item->dongia;
		if($item->Gia_KM != 0){
			$dongia_khuyenmai = $item->Gia_KM;
		}
		$cart = ['soluong'=>0, 'Gia' => $item->dongia, 'item' => $item];
		if($this->items){
			if(array_key_exists($id, $this->items)){
				$cart = $this->items[$id];
			}
		}
		$cart['soluong']++;
		$cart['Gia'] = $item->Gia * $cart['soluong'];
		$this->items[$id] = $cart;
		$this->sl_tong++;
		$this->gia_tong += $item->dongia;
	}
	//xóa 1
	public function reduceByOne($id){
		$this->items[$id]['soluong']--;
		$this->items[$id]['Gia'] -= $this->items[$id]['item']['Gia'];
		$this->sl_tong--;
		$this->gia_tong -= $this->items[$id]['item']['Gia'];
		if($this->items[$id]['soluong']<=0){
			unset($this->items[$id]);
		}
	}
	//xóa nhiều
	public function removeItem($id){
		$this->sl_tong -= $this->items[$id]['soluong'];
		$this->gia_tong -= $this->items[$id]['Gia'];
		unset($this->items[$id]);
	}
}
