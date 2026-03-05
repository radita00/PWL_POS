<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

public function run(): void
    {
        $data = [

            // SUPPLIER 1
            ['barang_id'=>1,'kategori_id'=>1,'supplier_id'=>1,'barang_kode'=>'BRG01','barang_nama'=>'Indomie Goreng','harga_beli'=>2500,'harga_jual'=>3500,'created_at'=>now(),'updated_at'=>now()],
            ['barang_id'=>2,'kategori_id'=>2,'supplier_id'=>1,'barang_kode'=>'BRG02','barang_nama'=>'Aqua 600ml','harga_beli'=>2000,'harga_jual'=>3000,'created_at'=>now(),'updated_at'=>now()],
            ['barang_id'=>3,'kategori_id'=>3,'supplier_id'=>1,'barang_kode'=>'BRG03','barang_nama'=>'Chitato','harga_beli'=>8000,'harga_jual'=>10000,'created_at'=>now(),'updated_at'=>now()],
            ['barang_id'=>4,'kategori_id'=>5,'supplier_id'=>1,'barang_kode'=>'BRG04','barang_nama'=>'Pulpen Pilot','harga_beli'=>3000,'harga_jual'=>5000,'created_at'=>now(),'updated_at'=>now()],
            ['barang_id'=>5,'kategori_id'=>4,'supplier_id'=>1,'barang_kode'=>'BRG05','barang_nama'=>'Lampu LED','harga_beli'=>15000,'harga_jual'=>20000,'created_at'=>now(),'updated_at'=>now()],

            // SUPPLIER 2
            ['barang_id'=>6,'kategori_id'=>1,'supplier_id'=>2,'barang_kode'=>'BRG06','barang_nama'=>'Mie Sedaap','harga_beli'=>2500,'harga_jual'=>3500,'created_at'=>now(),'updated_at'=>now()],
            ['barang_id'=>7,'kategori_id'=>2,'supplier_id'=>2,'barang_kode'=>'BRG07','barang_nama'=>'Teh Botol','harga_beli'=>3000,'harga_jual'=>4000,'created_at'=>now(),'updated_at'=>now()],
            ['barang_id'=>8,'kategori_id'=>3,'supplier_id'=>2,'barang_kode'=>'BRG08','barang_nama'=>'Taro','harga_beli'=>7000,'harga_jual'=>9000,'created_at'=>now(),'updated_at'=>now()],
            ['barang_id'=>9,'kategori_id'=>5,'supplier_id'=>2,'barang_kode'=>'BRG09','barang_nama'=>'Buku Tulis','harga_beli'=>4000,'harga_jual'=>6000,'created_at'=>now(),'updated_at'=>now()],
            ['barang_id'=>10,'kategori_id'=>4,'supplier_id'=>2,'barang_kode'=>'BRG10','barang_nama'=>'Setrika','harga_beli'=>80000,'harga_jual'=>95000,'created_at'=>now(),'updated_at'=>now()],

            // SUPPLIER 3
            ['barang_id'=>11,'kategori_id'=>1,'supplier_id'=>3,'barang_kode'=>'BRG11','barang_nama'=>'Beras 5kg','harga_beli'=>60000,'harga_jual'=>70000,'created_at'=>now(),'updated_at'=>now()],
            ['barang_id'=>12,'kategori_id'=>2,'supplier_id'=>3,'barang_kode'=>'BRG12','barang_nama'=>'Susu UHT','harga_beli'=>5000,'harga_jual'=>7000,'created_at'=>now(),'updated_at'=>now()],
            ['barang_id'=>13,'kategori_id'=>3,'supplier_id'=>3,'barang_kode'=>'BRG13','barang_nama'=>'Biskuit Roma','harga_beli'=>9000,'harga_jual'=>11000,'created_at'=>now(),'updated_at'=>now()],
            ['barang_id'=>14,'kategori_id'=>5,'supplier_id'=>3,'barang_kode'=>'BRG14','barang_nama'=>'Pensil 2B','harga_beli'=>1500,'harga_jual'=>3000,'created_at'=>now(),'updated_at'=>now()],
            ['barang_id'=>15,'kategori_id'=>4,'supplier_id'=>3,'barang_kode'=>'BRG15','barang_nama'=>'Kipas Angin','harga_beli'=>120000,'harga_jual'=>145000,'created_at'=>now(),'updated_at'=>now()],
        ];

        DB::table('m_barang')->insert($data);
    }
}
