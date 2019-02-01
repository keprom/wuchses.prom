<?php

echo anchor("billing/vih_7_re_form","Оборотная ведомость 7-РЭ")."<br>";
echo anchor("billing/vih_2_re_form","Оборотная ведомость 2-РЭ")."<br>";
echo anchor("billing/pre_dolgi","Должники")."<br>";
echo anchor("billing/pre_list_of_firms","Cписок действующих организаций и предприятий")."<br>";
echo anchor("billing/reported_firms_form","Отчитавшиеся/неотчитавшиеся предприятия")."<br>";
echo anchor("billing/pre_oplata_svod","Свод по оплате")."<br>";
echo anchor("billing/pre_oplata_po_schetam","Оплата за текущий период")."<br>";
echo anchor("billing/pre_svod_po_tp","Свод по тп")."<br>";
echo anchor("billing/pre_svod_saldo_po_ture","Свод сальдо по участкам")."<br>";
echo anchor("billing/pre_energo_24","24 энергетика")."<br>";
echo anchor("billing/pre_poleznyy_otpusk","Полезный отпуск")."<br>";
echo anchor("billing/pre_naryad_zadanie_po_ture","Наряд задание по ТУРЭ")."<br>";
echo anchor("billing/pre_oborotka_with_predoplata","Оборотка с учетом предоплаты")."<br>";
echo anchor("billing/pre_svod_oplat_po_firmam","Свод оплат по фирмам")."<br>";
echo anchor("billing/statisticheskiy_otchet","Статистический отчет")."<br>";
echo anchor("billing/pre_oborotno_svodnaya_vedomost","Оборотно сводная ведомость")."<br>";
echo anchor("billing/pre_diff_tariff_controll","Ведомость по дифф тарифу")."<br>";
echo anchor("billing/pre_diff_tariff_spisok","Ведомость по дифф тарифу (развернутая) ")."<br>";
echo anchor("billing/pre_diff_tariff_controll_3","Ведомость по дифф тарифу ( 3 тарифа ) ")."<br>";
echo anchor("billing/pre_diff_tariff_spisok_3","Ведомость по дифф тарифу ( 3 тарифа ) (развернутая) ")."<br>";
echo anchor("billing/pre_analiz_diff_tarif","Analiz по дифф тарифу ( 3 тарифа ) ")."<br>";
echo anchor("billing/pre_analiz_diff_tarif_spisok","Analiz по дифф тарифу ( 3 тарифа ) (развернутая) ")."<br>";
echo anchor("billing/pre_platejnye_dokumenty","Платежные документы")."<br>";
echo anchor("billing/pre_report_to_nalogovaya","Отчет в налоговую")."<br>";
echo anchor("billing/pre_multi_tariff_count","Количество многоставочных и одноставочных счетчиков.")."<br>";
echo anchor("billing/pre_nadbavka_info","Информация по надбавкам.")."<br>";
echo anchor("billing/pre_subabonent","Список субабонентов")."<br>";
echo anchor("billing/pre_ne_potrebil","Список фирм с нулевым начислением")."<br>";
echo anchor("billing/pre_svod","Свод потребления кВт за период")."<br>";
echo anchor("billing/pre_analiz_obwii","Анализ по общему тарифу")."<br>";
echo anchor("billing/pre_analiz_mnogourovneviy_spisok","Анализ по многоуровневому тарифу (развернутый)")."<br>";
echo anchor("billing/pre_analiz_mnogourovneviy","Анализ по многоуровневому тарифу")."<br>"

?>

<li><a href="<?php echo site_url('billing/pre_fine_2_re'); ?>"><?php echo '2-РЭ (пеня)'; ?></a></li>
<li><a href="<?php echo site_url('billing/pre_fine_7_re'); ?>"><?php echo '7-РЭ (пеня)'; ?></a></li>
<li><a href="<?php echo site_url('billing/pre_report_2000'); ?>"><?php echo 'Сведения о потреблении электроэнергии по договору свыше 2000кВт'; ?></a></li>
<li><a href="<?php echo site_url('billing/pre_svod_oplat_po_firmam_year'); ?>"><?php echo 'Годовой свод оплат в разрезе фирм'; ?></a></li>
<li><a href="<?php echo site_url('billing/counter_stat_report'); ?>"><?php echo 'Стат.отчет по счетчикам в разрезе фирм'; ?></a></li>
<li><a href="<?php echo site_url('billing/pre_narzad_po_ture'); ?>"><?php echo 'Наряд-задание по ТУРЭ'; ?></a></li>
<li><a href="<?php echo site_url('billing/counter_by_type'); ?>"><?php echo 'Количество счетчиков по типам'; ?></a></li>
<li><a href="<?php echo site_url('billing/gos_poverka'); ?>"><?php echo 'Гос.поверка'; ?></a></li>
<li><a href="<?php echo site_url('billing/kontragent_rek'); ?>"><?php echo 'Список контрагентов с реквизитами'; ?></a></li>
<li><a href="<?php echo site_url('billing/sf_verification'); ?>"><?php echo 'Номера счетов-фактур с начислениями'; ?></a></li>