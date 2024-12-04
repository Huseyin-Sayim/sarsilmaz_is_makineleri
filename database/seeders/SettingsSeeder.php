<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('settings')->insert([
            [
                "name" => "Sarsılmaz İş Makineleri",
                "key" => "url",
                "value" => "http://127.0.0.1:8000/"
            ],
            [
                "name" => "Hakkımızda",
                "key" => "about",
                "value" => "Sarsılmaz İş Makineleri olarak, inşaat ve endüstri sektöründe her türlü ağır iş makinesi ve ekipmanının tamir, bakım ve onarım hizmetlerini sunmaktayız. Bekoloder, ekskavatör, greyder, dozer, traktör, telehandler ve forklift gibi geniş bir yelpazede arıza tespiti ve onarım işlemleri gerçekleştirmekteyiz.

Müşterilerimizin iş sürekliliğini sağlamak için, hidrolik pompa, valf, piston tamiri ve hidrolik sistem arıza tespiti hizmetleri sunuyoruz. Ayrıca, transpalet tamiri ve revizyonu alanında da uzman ekibimizle çözüm ortaklığı yapmaktayız.

Yedek parça temininden, forklift kiralama hizmetine kadar ihtiyaçlarınıza yönelik kapsamlı çözümler sunuyoruz. Düzenli bakım ihtiyacınızı karşılamak üzere, periyodik bakım kampanyalarımız ile müşterilerimize ekonomik ve güvenilir hizmet sağlıyoruz.

Kaliteli hizmet anlayışımız ve alanında uzman ekibimizle, iş makinelerinizin performansını artırmak ve kesintisiz bir iş akışı sunmak için buradayız.",
            ],
            [
                "name" => "Neden Bizi Seçmelisiniz",
                "key" => "why_choose_us",
                "value" => "İş makinelerinizin tamir, bakım, onarım ve arıza tespiti işlemlerinde uzman ekibimizle hızlı ve güvenilir çözümler sunuyoruz. Bekoloder, ekskavatör, greyder, dozer, traktör, telehandler ve forklift gibi makineleriniz için hidrolik sistem onarımı, mekanik sistem onarımı ve yedek parça temini gibi hizmetleri kaliteli bir şekilde gerçekleştiriyoruz.

Periyodik bakım ve esnek forklift kiralama seçeneklerimizle makinelerinizin verimliliğini artırıyor, iş sürekliliğinizi sağlıyoruz. Orijinal yedek parça kullanarak makinelerinizin ömrünü uzatıyor, zamanında çözümler sunarak iş gücü kaybınızı en aza indiriyoruz."
            ]
        ]);
    }
}
