<?php

function boolval($val){
    if( !$val ) return false;
    else return true;
}

class lau {
    function setStatus( $status, $icon = "" ){
        c("fmMain->statusBar1")->simpleText = "         " . $status;

        if($icon){
            if(file_exists($icon)){
                c("fmMain->image1")->loadFromFile($icon);
            }
        }
    }
    function Restart(){
        runWith($GLOBALS["_PARAMS"][0], implode(" ", array_slice( $GLOBALS["_PARAMS"], 1)));
        exit();
    }
    function setLang($lang = 0){
        global $lang_1, $message, $sc, $na, $na1, $na2;
        switch($lang){
            default: {
                c("tabControl1")->text = "Game
Programs and Settings
Scripts
About";
                c("laun_lang")->caption = "Launcher language:";
                if(!$na) c("satp")->caption = "Start SA TP";
                else c("satp")->caption = "Start " . $na;
                if(!$na1) c("txd")->caption = "Start TXD Workshop";
                else c("txd")->caption = "Start " . $na1;
                c("gta_sa")->caption = "Start GTA:SA";
                c("applyB")->hint = "Apply changes";
                c("checkbox1")->text = "Load plug-ins [ CLEO load ]";
                c("unofText")->caption = "[ UNOFFICIAL ]  Rockstar North, Rockstar Games
has nothing to do with this program!";
                c("verLabel")->caption = "v" . VER . " | by Emil Dalalyan";
                if(!$na2) c("samp")->caption = "Start SAMP";
                else c("samp")->caption = "Start " . $na2;
                c("combobox1")->text = "English
Russian
French";
                c("buildD")->caption = "Build by ". BUILD;
                c("edc")->caption = "Edit Config";
                c("tabControl2")->text = "Configuration
Manage scripts";
                c("fmPHPScrs")->caption = "View PHP Scripts...";
                c("fmMain->panel1")->toFront();
                c("combobox1")->itemIndex = 0;
                c("lscr")->caption = "Aspect ratio:";
                c("applyB4")->caption = "Set aspect ratio";
                c("spb")->caption = "Delete";
                c("rfs")->caption = "Refresh";
                c("spButton1")->caption = "Refresh";
                c("fmProgsEdit->button1")->caption = "Edit";
                c("fmEditButton->button4")->caption = "Cancel";
                c("fmEditButton->label1")->caption = "Icon:";
                c("fmEditButton->label2")->caption = "Executable:";
                c("fmEditButton->label3")->caption = "Name:";
                c("fmMain->groupBox1")->caption = "Settings";
                c("fmMain->checkBox2")->caption = "Hide status bar";
                c("fmMain->checkBox3")->caption = "Do not load PHP scripts";
                c("fmMain->checkBox4")->caption = "Do not use double buffer";
                c("fmMain->checkBox5")->caption = "Do not write gta_sa.exe in register";
                c("fmMain->link1")->caption = "Repaint interface";

                $message = array( 0 => "Not found executable file! Code: 0xe", 2 => "Select script!", 1 => "You made changes in file, but not save it. Save this file?", 3 => "File failed to save!", 4 => "Select script.",
                5 => "Edit", 6 => "Button", 7 => "Please, select button in list!", 8 => "Start", 9 => "Loaded", 10 => "script (s)", 11 => "Please, restart launcher!", 12 => "Do you want to delete this script?");

                $lang_1 = "eng";

                if( $sc ) c("label3")->caption = $message[9] . " " . $sc . " PHP " . $message[10];

                lau::setStatus($GLOBALS["lau_info"][0] . " GB Free");

                return true;
            }
            case 1: {
                c("tabControl1")->text = "Игра
Программы и Настройки
Скрипты
О программе";
                c("laun_lang")->caption = "Язык лончера:";
                if(!$na) c("satp")->caption = "Открыть SA TP";
                else c("satp")->caption = "Открыть " . $na;
                if(!$na1) c("txd")->caption = "Открыть TXD Workshop";
                else c("txd")->caption = "Открыть " . $na1;
                c("gta_sa")->caption = "Открыть GTA:SA";
                c("applyB")->hint = "Применить изменения";
                c("checkbox1")->text = "Загружать плагины [ загрузка CLEO ]";
                c("unofText")->caption = "[ НЕОФФИЦИАЛЬНАЯ ] Rockstar North, Rockstar Games
не имеют отношения к этой программе!";
                c("verLabel")->caption = "v" . VER . " | от Эмиля Далаляна";
                if(!$na2) c("samp")->caption = "Открыть SAMP";
                else c("samp")->caption = "Открыть " . $na2;
                c("combobox1")->text = "Английский
Русский
Французкий";
                c("buildD")->caption = "Сборка от " . BUILD;
                c("edc")->caption = "Изменить";
                c("tabControl2")->text = "Конфигурация
Управление скриптами";
                c("fmMain->panel1")->toFront();
                c("combobox1")->itemIndex = 1;
                c("lscr")->caption = "Пропорции:";
                c("applyB4")->caption = "Выставить пропорции";
                c("spb")->caption = "Удалить";
                c("rfs")->caption = "Обновить";
                c("spButton1")->caption = "Обновить";
                c("fmPHPScrs")->caption = "Просмотреть PHP скрипты...";
                c("fmProgsEdit->button1")->caption = "Редактировать";
                c("fmEditButton->button4")->caption = "Отмена";
                c("fmEditButton->label1")->caption = "Иконка:";
                c("fmEditButton->label2")->caption = "Ис-ый.файл:";
                c("fmEditButton->label3")->caption = "Имя:";
                c("fmMain->groupBox1")->caption = "Настройки";
                c("fmMain->checkBox2")->caption = "Скрывать статус бар";
                c("fmMain->checkBox3")->caption = "Не загружать PHP скрипты";
                c("fmMain->checkBox4")->caption = "Не использовать double-buffer";
                c("fmMain->checkBox5")->caption = "Не прописывать gta_sa.exe в реестр";
                c("fmMain->link1")->caption = "Перерисовать интерфейс";

                $message = array( 0 => "Не найдено исполняемого файла! Код: 0xe", 2 => "Выберите скрипт!", 1 => "Вы внесли изменения в файл, но не сохранили его. Сохранить этот файл?", 3 => "Файл не удалось сохранить!", 4 => "Выберите скрипт.",
                5 => "Редактировать", 6 => "Кнопка", 7 => "Пожалуйста, выберите кнопку в списке!", 8 => "Открыть", 9 => "Загружено", 10 => "скрипт (ов)", 11 => "Пожалуйста, перезагрузите лончер!", 12 => "Вы точно хотите удалить этот скрипт?");

                $lang_1 = "rus";

                if( $sc ) c("label3")->caption = $message[9] . " " . $sc . " PHP " . $message[10];

                lau::setStatus($GLOBALS["lau_info"][0] . " ГБ Доступно");

                return true;
            }
            case 2: {
                c("tabControl1")->text = "Jeu
Programs et Reglages
Scripts
A propos du programme";
                c("laun_lang")->caption = "Langue de launcer:";
                c("satp")->caption = "Ouvre SA TP";
                c("txd")->caption = "Ouvre TXD Workshop";
                c("applyB")->hint = "OK";
                c("gta_sa")->caption = "Ouvre GTA:SA";
                c("checkbox1")->text = "Telecharger les plug-ins [ telecharger CLEO ]";
                c("unofText")->caption = "[ UNOFFICIAL ]  Rockstar North, Rockstar Games
n'a rien a voir avec ce programme!";
                c("verLabel")->caption = "v" . VER . " | par Emil Dalalyan";
                c("buildD")->caption = "L'assemblee par ". BUILD;
                c("samp")->caption = "Ouvre SAMP";
                c("combobox1")->text = "Anglais
Russe
Francais";
                c("edc")->caption = "Changer";
                c("tabControl2")->text = "Configuration
Manage de scripts";
                c("spb")->caption = "Delete";
                c("fmMain->panel1")->toFront();
                c("fmPHPScrs")->caption = "Afficher les scripts PHP...";
                c("combobox1")->itemIndex = 2;
                c("lscr")->caption = "Ratio d'aspect:";
                c("rfs")->caption = "Recharger";
                c("spButton1")->caption = "Recharger";
                c("applyB4")->caption = "Definir ratio d'aspect";
                c("fmProgsEdit->button1")->caption = "Change";
                c("fmEditButton->button4")->caption = "Cancel";
                c("fmEditButton->label1")->caption = "Icone:";
                c("fmEditButton->label2")->caption = "Executable:";
                c("fmEditButton->label3")->caption = "Nom:";
                c("fmMain->groupBox1")->caption = "Reglages";
                c("fmMain->checkBox2")->caption = "Masquer la barre d'etat";
                c("fmMain->checkBox3")->caption = "Ne chargez pas de scripts PHP";
                c("fmMain->checkBox4")->caption = "Ne pas utiliser de double tampon";
                c("fmMain->checkBox5")->caption = "N'enregistrez pas gta_sa.exe dans le registre";
                c("fmMain->link1")->caption = "Redessiner l'interface";

                $message = array( 0 => "Fichier de executable non trouve! Code: 0xe", 2 => "Sel script!", 1 => "Vous avez apporte des modifications mais n'avez pas enregistre le fichier. Enregistrer le fichier?", 3 => "Echec d'enregistrement du fichier!", 4 => "Select de script.",
                5 => "Edit", 6 => "Le button", 7 => "Please, select button in list!", 8 => "Ouvre", 9 => "Loaded", 10 => "script (s)", 11 => "Please, restart launcher!", 12 => "Voulez-vous supprimer ce script?");

                $lang_1 = "fr";

                //Other

                if( $sc ) c("label3")->caption = $message[9] . " " . $sc . " PHP " . $message[10];

                lau::setStatus($GLOBALS["lau_info"][0] . " GB Gratuits");

                return true;
            }
        }
        return false;
    }
}

?>