<?php
/* $Id$ */

$charset = 'iso-8859-2';
$text_dir = 'ltr';
$left_font_family = 'verdana, "arial ce", arial, helvetica, geneva, sans-serif';
$right_font_family = 'tahoma, verdana, "arial ce", arial, helvetica, geneva, sans-serif';
$number_thousands_separator = ' ';
$number_decimal_separator = ',';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('bajt�w', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');

$day_of_week = array('Nie', 'Pon', 'Wto', '�ro', 'Czw', 'Pi�', 'Sob');
$month = array('Sty', 'Lut', 'Mar', 'Kwi', 'Maj', 'Cze', 'Lip', 'Sie', 'Wrz', 'Pa�', 'Lis', 'Gru');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%d %B %Y, %H:%M';
$timespanfmt = '%s dni, %s godzin, %s minut i %s sekund';

$strAPrimaryKey = 'Do %s dodany zosta� klucz podstawowy';
$strAbortedClients = 'Przerwane';
$strAbsolutePathToDocSqlDir = 'Prosz� poda� bezwzgl�dn� �cie�k� na serwerze www do katalogu docSQL';
$strAccessDenied = 'Brak dost�pu';
$strAccessDeniedExplanation = 'phpMyAdmin pr�bowa� po��czy� si� z serwerem MySQL, a serwer odrzuci� po��czenie. Powiniene� sprawdzi� nazw� hosta, nazw� u�ytkownika i has�o w pliku config.inc.php i upewni� si�, �e odpowiadaj� one informacjom danym przez administratora serwera MySQL.';
$strAction = 'Dzia�anie';
$strAddAutoIncrement = 'Dodanie warto�ci AUTO_INCREMENT';
$strAddConstraints = 'Dodanie ogranicze�';
$strAddDeleteColumn = 'Dodanie/usuni�cie p�l';
$strAddDeleteRow = 'Dodanie/usuni�cie wierszy kryteri�w';
$strAddDropDatabase = 'Dodanie DROP DATABASE';
$strAddIntoComments = 'Dodanie do komentarzy';
$strAddNewField = 'Dodanie nowego pola';
$strAddPrivilegesOnDb = 'Dodaj uprawnienia dla nast�puj�cej bazy danych';
$strAddPrivilegesOnTbl = 'Dodaj uprawnienia dla nast�puj�cej tabeli';
$strAddSearchConditions = 'Dodanie warunk�w przeszukiwania (warunek dla "where"):';
$strAddToIndex = 'Dodanie &nbsp;%s&nbsp;kolumn do indeksu ';
$strAddUser = 'Dodanie nowego u�ytkownika';
$strAddUserMessage = 'Nowy u�ytkownik zosta� dodany.';
$strAddedColumnComment = 'Zosta� dodany komentarz dla kolumny';
$strAddedColumnRelation = 'Zosta�a dodana relacja dla kolumny';
$strAdministration = 'Administracja';
$strAffectedRows = 'Zmodyfikowanych rekord�w:';
$strAfter = 'Po %s';
$strAfterInsertBack = 'Powr�t';
$strAfterInsertNewInsert = 'Wstawienie nowego rekordu';
$strAll = 'Wszystko';
$strAllTableSameWidth = 'wy�wietli� wszystkie tabele z tak� sam� szeroko�ci�?';
$strAlterOrderBy = 'Sortowanie tabeli wg';
$strAnIndex = 'Do %s dodany zosta� indeks';
$strAnalyzeTable = 'Analizowanie tabeli';
$strAnd = 'Oraz';
$strAny = 'Dowolny';
$strAnyHost = 'Dowolny host';
$strAnyUser = 'Dowolny u�ytkownik';
$strArabic = 'Arabski';
$strArmenian = 'Ormia�ski';
$strAscending = 'Rosn�co';
$strAtBeginningOfTable = 'Na pocz�tku tabeli';
$strAtEndOfTable = 'Na ko�cu tabeli';
$strAttr = 'Atrybuty';
$strAutodetect = 'Autodetekcja';
$strAutomaticLayout = 'Uk�ad automatyczny';

$strBack = 'Powr�t';
$strBaltic = 'Ba�tycki';
$strBeginCut = 'TNIJ ST�D';
$strBeginRaw = 'SUROWE DANE ST�D';
$strBinary = ' Binarne ';
$strBinaryDoNotEdit = ' Binarne - nie do edycji ';
$strBookmarkAllUsers = 'Pozwolenie na dost�p do zapytania przez ka�dego u�ytkownika';
$strBookmarkDeleted = 'Zapami�tane zapytanie SQL zosta�o usuni�te.';
$strBookmarkLabel = 'Nazwa';
$strBookmarkOptions = 'Opcje zapami�tanych zapyta�';
$strBookmarkQuery = 'Zapami�tane zapytanie SQL';
$strBookmarkThis = 'Zapami�tanie zapytania SQL';
$strBookmarkView = 'Tylko do pokazania';
$strBrowse = 'Przegl�danie';
$strBrowseForeignValues = 'Przegl�danie zewn�trznych warto�ci';
$strBulgarian = 'Bu�garski';
$strBzError = 'phpMyAdminowi nie uda�o si� skompresowa� zrzutu z powodu zepsutego rozszerzenia Bz2 w tej wersji php. Jest bardzo zalecane by ustawi� dyrektyw� <code>$cfg[\'BZipDump\']</code> w pliku konfiguracyjnym phpMyAdmina na <code>FALSE</code>. Je�li chcesz u�y� funkcji kompresji Bz2, php powinien zosta� zaktualizowany do najnowszej wersji. Szczeg�y mo�na zobaczy� w raporcie na temat b��d�w php %s.';
$strBzip = '".bz2"';

$strCSVOptions = 'Opcje CSV';
$strCannotLogin = 'Nie uda�o si� zalogowa� na serwer MySQL';
$strCantLoad = 'nie uda�o si� za�adowa� modu�u %s,<br />prosz� sprawdzi� konfiguracj� PHP';
$strCantLoadRecodeIconv = 'Nie uda�o si� za�adowa� rozszerze� iconv lub recode, kt�re s� niezb�dne do konwersji kodowania znak�w, skonfiguruj php tak, by m�g� u�ywa� tych rozszerze� albo zablokuj konwersj� kodowania znak�w w phpMyAdminie.';
$strCantRenameIdxToPrimary = 'Nie mo�na zmieni� nazwy indeksu na PRIMARY!';
$strCantUseRecodeIconv = 'Nie uda�o si� u�y� ani funkcji iconv, ani libiconv, mimo �e rozszerzenia zg�aszaj� si� jako za�adowane. Sprawd� swoj� konfiguracj� php.';
$strCardinality = 'Moc';
$strCarriage = 'Znak powrotu: \\r';
$strCaseInsensitive = 'bez rozr�niania wielko�ci liter';
$strCaseSensitive = 'z rozr�nianiem wielko�ci liter';
$strCentralEuropean = '�rodkowoeuropejski';
$strChange = 'Zmiana';
$strChangeCopyMode = 'Utworzenie nowego u�ytkownika z takimi samymi uprawnieniami i ...';
$strChangeCopyModeCopy = '... pozostawienie starego.';
$strChangeCopyModeDeleteAndReload = ' ... usuni�cie starego z tabel u�ytkownik�w, a nast�pnie prze�adowanie uprawnie�.';
$strChangeCopyModeJustDelete = ' ... usuni�cie starego z tabel u�ytkownik�w.';
$strChangeCopyModeRevoke = ' ... odebranie wszystkich aktywnych uprawnie� staremu, a nast�pnie jego usuni�cie.';
$strChangeCopyUser = 'Zmie� dane u�ytkownika / Skopiuj u�ytkownika';
$strChangeDisplay = 'Wybierz wy�wietlane pole';
$strChangePassword = 'Zmiana has�a';
$strCharset = 'System kodowania znak�w';
$strCharsetOfFile = 'System kodowanie znak�w dla pliku:';
$strCharsets = 'Systemy kodowania znak�w';
$strCharsetsAndCollations = 'Systemy kodowania znak�w i por�wna�';
$strCheckAll = 'Zaznaczenie wszystkich';
$strCheckOverhead = 'Zaznaczenie nieoptymalnych';
$strCheckPrivs = 'Sprawdzenie uprawnie�';
$strCheckPrivsLong = 'Sprawdzenie uprawnie� dla bazy danych &quot;%s&quot;.';
$strCheckTable = 'Sprawdzanie tabeli';
$strChoosePage = 'Prosz� wybra� stron� do edycji';
$strColComFeat = 'Wy�wietlanie komentarzy dla kolumn';
$strCollation = 'System por�wna�';
$strColumnNames = 'Nazwy kolumn';
$strColumnPrivileges = 'Uprawnienia specyficzne dla kolumn';
$strCommand = 'Polecenie';
$strComments = 'Komentarze';
$strCompleteInserts = 'Pe�ne dodania';
$strCompression = 'Kompresja';
$strConfigFileError = 'phpMyAdmin nie zdo�a� odczyta� Twojego pliku konfiguracj!<br />Mo�e si� to zdarzy�, je�li php znajdzie w nim b��d sk�adniowy lub nie mo�e znale�� tego pliku.<br />Prosz� wywo�a� bezpo�rednio plik konfiguracyjny u�ywaj�c poni�szego linku i odczyta� otrzymane komunikat(y) o b��dach. W wi�kszo�ci przypadk�w brakuje gdzie� cudzys�owu lub �rednika.<br />Je�eli otrzymasz pust� stron�, wszystko jest w porz�dku.';
$strConfigureTableCoord = 'Prosz� skonfigurowa� wsp�rz�dnie dla tabeli %s';
$strConnectionError = 'Nie uda�o si� nawi�za� po��czenia: b��dne ustawienia.';
$strConnections = 'Po��czenia';
$strConstraintsForDumped = 'Ograniczenia dla zrzut�w tabel';
$strConstraintsForTable = 'Ograniczenia dla tabeli';
$strCookiesRequired = 'Odt�d musi by� w��czona obs�uga "cookies".';
$strCopyTable = 'Skopiuj tabel� do (bazadanych<b>.</b>tabela):';
$strCopyTableOK = 'Tabela %s zosta�a skopiowana do %s.';
$strCopyTableSameNames = 'Nie mo�na skopiowa� tabeli do niej samej!';
$strCouldNotKill = 'phpMyAdminowi nie uda�o si� unicestwi� w�tku %s. Prawdopodobnie zosta� on ju� zamkni�ty.';
$strCreate = 'Utworzenie';
$strCreateIndex = 'Utworzenie indeksu dla %s kolumn';
$strCreateIndexTopic = 'Utworzenie nowego indeksu';
$strCreateNewDatabase = 'Utworzenie nowej bazy danych';
$strCreateNewTable = 'Utworzenie nowej tabeli dla bazy danych %s';
$strCreatePage = 'Utworzenie nowej strony';
$strCreatePdfFeat = 'Tworzenie PDF-�w';
$strCreationDates = 'Daty utworzenia/aktualizacji/sprawdzenia';
$strCriteria = 'Kryteria';
$strCroatian = 'Chorwacki';
$strCyrillic = 'Cyrylica';
$strCzech = 'Czeski';
$strCzechSlovak = 'Czesko-s�owacki';

$strDBComment = 'Komentarz bazy danych: ';
$strDBGContext = 'Kontekst';
$strDBGContextID = 'ID kontekstu';
$strDBGHits = 'Trafienia';
$strDBGLine = 'Linia';
$strDBGMaxTimeMs = 'Maksymalny czas, ms';
$strDBGMinTimeMs = 'Minimalny czas, ms';
$strDBGModule = 'Modu�';
$strDBGTimePerHitMs = 'Czas/trafienie, ms';
$strDBGTotalTimeMs = 'Ca�kowity czas, ms';
$strDanish = 'Du�ski';
$strData = 'Dane';
$strDataDict = 'S�ownik danych';
$strDataOnly = 'Tylko dane';
$strDatabase = 'Baza danych';
$strDatabaseExportOptions = 'Opcje eksportu bazy danych';
$strDatabaseHasBeenDropped = 'Baza danych %s zosta�a usuni�ta.';
$strDatabaseNoTable = 'Ta baza danych nie zawiera �adnej tabeli!';
$strDatabases = 'Bazy danych';
$strDatabasesDropped = '%s baz danych zosta�o pomy�lnie usuni�tych.';
$strDatabasesStats = 'Statystyki baz danych';
$strDatabasesStatsDisable = 'Wy��czenie statystyk';
$strDatabasesStatsEnable = 'W��czenie statystyk';
$strDatabasesStatsHeavyTraffic = 'Uwaga: W��czenie statystyk baz danych mo�e spowodowa� du�y ruch pomi�dzy serwerem www a serwerem MySQL.';
$strDbPrivileges = 'Uprawnienia specyficzne dla baz danych';
$strDbSpecific = 'specyficzne dla bazy danych';
$strDefault = 'Domy�lnie';
$strDefaultValueHelp = 'Dla warto�ci domy�lnych, prosz� wprowadzi� po prostu pojedyncz� warto��, bez cytowania odwrotnym uko�nikiem czy ujmowania w cudzys�owy, u�ywaj�c takiego formatu: a';
$strDelOld = 'Aktualna strona ma powi�zania z tabel�, kt�ra ju� nie istnieje. Czy chcesz usun�� te powi�zania?';
$strDelayedInserts = 'U�ycie op�nionych doda�';
$strDelete = 'Skasowanie';
$strDeleteAndFlush = 'Usuni�cie u�ytkownik�w, a nast�pnie prze�adowanie uprawnie�.';
$strDeleteAndFlushDescr = 'Jest to najzgrabniejszy spos�b, ale prze�adowanie uprawnie� mo�e potrwa� jaki� czas.';
$strDeleted = 'Rekord zosta� skasowany';
$strDeletedRows = 'Skasowane rekordy:';
$strDeleting = 'Usuwanie %s';
$strDescending = 'Malej�co';
$strDescription = 'Opis';
$strDictionary = 's�ownik';
$strDisabled = 'wy��czone';
$strDisplayFeat = 'Funkcje wy�wietlania';
$strDisplayOrder = 'Kolejno�� wy�wietlania:';
$strDisplayPDF = 'Wy�wietl schemat PDF';
$strDoAQuery = 'Wykonaj "zapytanie przez przyk�ad" (znak globalny: "%")';
$strDoYouReally = 'Czy na pewno wykona� ';
$strDocu = 'Dokumentacja';
$strDrop = 'Usuni�cie';
$strDropDatabaseStrongWarning = 'Masz zamiar ZNISZCZY� ca�� baz� danych!';
$strDropSelectedDatabases = 'Usuni�cie wybranych baz danych';
$strDropUsersDb = 'Usuni�cie baz danych o takich samych nazwach jak u�ytkownicy.';
$strDumpSaved = 'Zrzut zosta� zapisany do pliku %s.';
$strDumpXRows = 'Zrzu� %s wierszy zaczynaj�c od wiersza %s.';
$strDumpingData = 'Zrzut danych tabeli';
$strDynamic = 'zmienny';

$strEdit = 'Edycja';
$strEditPDFPages = 'Edycja stron PDF';
$strEditPrivileges = 'Edycja uprawnie�';
$strEffective = 'Efektywne';
$strEmpty = 'Wyczyszczenie';
$strEmptyResultSet = 'MySQL zwr�ci� pusty wynik (np. zero rekord�w).';
$strEnabled = 'w��czone';
$strEnd = 'Koniec';
$strEndCut = 'TNIJ DOT�D';
$strEndRaw = 'SUROWE DANE DOT�D';
$strEnglish = 'Angielski';
$strEnglishPrivileges = ' Uwaga: Uprawnienia MySQL s� oznaczone w j�z. angielskim ';
$strError = 'B��d';
$strEstonian = 'Esto�ski';
$strExcelEdition = 'Wydanie Excela';
$strExcelOptions = 'Opcje Excela';
$strExecuteBookmarked = 'Wykonanie zapami�tanego zapytania';
$strExplain = 'Wyja�nienie SQL';
$strExport = 'Eksport';
$strExtendedInserts = 'Rozszerzone dodania';
$strExtra = 'Dodatkowy';

$strFailedAttempts = 'Nieudane pr�by';
$strField = 'Pole';
$strFieldHasBeenDropped = 'Pole %s zosta�o usuni�te';
$strFields = 'Pola';
$strFieldsEmpty = ' Liczba p�l jest pusta! ';
$strFieldsEnclosedBy = 'Pola zawarte w';
$strFieldsEscapedBy = 'Pola poprzedzone przez';
$strFieldsTerminatedBy = 'Pola oddzielane przez';
$strFileAlreadyExists = 'Plik %s ju� istnieje na serwerze, zmie� nazw� pliku lub zaznacz opcj� nadpisywania plik�w.';
$strFileCouldNotBeRead = 'Nie mo�na odczyta� pliku';
$strFileNameTemplate = 'Szablon nazwy';
$strFileNameTemplateHelp = 'Jako nazwy bazy danych u�yj __DB__, __TABLE__ jako nazwy tabeli, a by okre�li� czas - dowolnych opcji %sstrftime%s; rozszerzenia zostan� dodane automatycznie. Ka�dy inny tekst zostanie zachowany.';
$strFileNameTemplateRemember = 'zapami�tanie szablonu';
$strFixed = 'sta�y';
$strFlushPrivilegesNote = 'Uwaga: phpMyAdmin pobiera uprawnienia u�ytkownik�w wprost z tabeli uprawnie� MySQL-a. Zawarto�� tej tabeli mo�e r�ni� si� od uprawnie� jakich u�ywa serwer, je�li zosta�y dokonane w niej r�czne zmiany. W takim przypadku powiniene� %sprze�adowa� uprawnienia%s przed dalsz� prac�.';
$strFlushTable = 'Prze�adowanie tabeli ("FLUSH")';
$strFormEmpty = 'Brakuj�ca warto�� w formularzu!';
$strFormat = 'Format';
$strFullText = 'Pe�ny tekst';
$strFunction = 'Funkcja';

$strGenBy = 'Wygenerowany przez';
$strGenTime = 'Czas wygenerowania';
$strGeneralRelationFeat = 'Og�lne funkcje relacyjne';
$strGeorgian = 'Gruzi�ski';
$strGerman = 'Niemiecki';
$strGlobal = 'globalnie';
$strGlobalPrivileges = 'Globalne uprawnienia';
$strGlobalValue = 'Warto�� globalna';
$strGo = 'Wykonanie';
$strGrantOption = 'Nadanie';
$strGreek = 'Grecki';
$strGzip = '".gz"';

$strHasBeenAltered = 'zosta�o zamienione.';
$strHasBeenCreated = 'zosta�o utworzone.';
$strHaveToShow = 'Musisz wybra� przynajmniej jedn� kolumn� do wy�wietlenia';
$strHebrew = 'Hebrajski';
$strHome = 'Wej�cie';
$strHomepageOfficial = 'Oficjalna strona phpMyAdmina';
$strHost = 'Host';
$strHostEmpty = 'Brak nazwy hosta!';
$strHungarian = 'W�gierski';

$strId = 'ID';
$strIdxFulltext = 'Pe�ny tekst';
$strIfYouWish = 'Prosz� poda� list� kolumn rozdzielon� przecinkami aby za�adowa� tylko wybrane kolumny.';
$strIgnore = 'Ignoruj';
$strIgnoringFile = 'Plik %s jest ignorowany';
$strImportDocSQL = 'Import plik�w docSQL';
$strImportFiles = 'Import plik�w';
$strImportFinished = 'Import zako�czony';
$strInUse = 'w u�yciu';
$strIndex = 'Indeks';
$strIndexHasBeenDropped = 'Klucz %s zosta� usuni�ty';
$strIndexName = 'Nazwa indeksu :';
$strIndexType = 'Rodzaj indeksu :';
$strIndexes = 'Indeksy';
$strInnodbStat = 'Status InnoDB';
$strInsecureMySQL = 'Tw�j plik konfiguracyjny zawiera ustawienia (konto roota bez has�a), kt�re odpowiadaj� domy�lnemu uprzywilejowanemu kontu MySQL. Tw�j serwer MySQL dzia�a z takim domy�lnym ustawieniem, jest otwarty dla w�amywaczy i naprawd� ta luka w bezpiecze�stwie powinna zosta� naprawiona.';
$strInsert = 'Dodanie';
$strInsertAsNewRow = 'Dodanie jako nowego rekordu';
$strInsertNewRow = 'Dodanie nowego rekordu';
$strInsertTextfiles = 'Dodanie pliku tekstowego do tabeli';
$strInsertedRowId = 'Id wstawionego wiersza:';
$strInsertedRows = 'Wprowadzone rekordy:';
$strInstructions = 'Instrukcje';
$strInternalNotNecessary = '* Wewn�trzna relacja nie jest konieczna gdy istnieje r�wnie� w InnoDB.';
$strInternalRelations = 'Wewn�trzne relacje';

$strJapanese = 'Japo�ski';
$strJumpToDB = 'Skok do bazy danych &quot;%s&quot;.';
$strJustDelete = 'Po prostu usuni�cie u�ytkownik�w z tabeli uprawnie�.';
$strJustDeleteDescr = 'Nim uprawnienia zostan� prze�adowane, &quot;usuni�ci&quot; u�ytkownicy nadal b�d� mieli dotychczasowy dost�p do serwera.';

$strKeepPass = 'Nie zmieniaj has�a';
$strKeyname = 'Nazwa klucza';
$strKill = 'Zabicie';
$strKorean = 'Korea�ski';

$strLaTeX = 'LaTeX';
$strLaTeXOptions = 'opcje LaTeX\'a';
$strLandscape = 'Orientacja pozioma';
$strLatexCaption = 'Nag��wek tabeli';
$strLatexContent = 'Zawarto�� tabeli __TABLE__';
$strLatexContinued = '(kontynuacja)';
$strLatexContinuedCaption = 'Kontynuacja nag��wka tabeli';
$strLatexIncludeCaption = 'Za��cz nag��wek tabeli';
$strLatexLabel = 'Etykieta klucza';
$strLatexStructure = 'Struktura tabeli __TABLE__';
$strLengthSet = 'D�ugo��/Warto�ci*';
$strLimitNumRows = 'rekord�w na stronie';
$strLineFeed = 'Kod wysuni�cia linii: \\n';
$strLinesTerminatedBy = 'Linie zako�czone przez';
$strLinkNotFound = '��cze nie znalezione';
$strLinksTo = '��cze';
$strLithuanian = 'Litewski';
$strLoadExplanation = 'Domy�lnie zaznaczona jest najlepsza metoda, ale mo�na j� zmieni� je�li nie dzia�a.';
$strLoadMethod = 'Metoda LOAD';
$strLocalhost = 'Host lokalny';
$strLocationTextfile = 'Lokalizacja pliku tekstowego';
$strLogPassword = 'Has�o:';
$strLogServer = 'Serwer';
$strLogUsername = 'U�ytkownik:';
$strLogin = 'Login';
$strLoginInformation = 'Dane u�ytkownika';
$strLogout = 'Wylogowanie';

$strMIME_MIMEtype = 'Typ MIME';
$strMIME_available_mime = 'Dost�pne typy MIME';
$strMIME_available_transform = 'Dost�pne transformacje';
$strMIME_description = 'Opis';
$strMIME_nodescription = 'Transformacja ta nie ma opisu.<br />Prosz� zapyta� autora, co robi %s.';
$strMIME_transformation = 'Spos�b prezentacji danych';
$strMIME_transformation_note = 'Aby uzyska� list� dost�pnych opcji transformacji i ich typ�w MIME, kliknij na %sopisy transformacji%s';
$strMIME_transformation_options = 'Opcje transformacji';
$strMIME_transformation_options_note = 'Prosz� wprowadzi� warto�ci dla tranformacji w nast�puj�cym formacie: \'a\',\'b\',\'c\'...<br />Je�eli potrzeba wprowadzi� odwrotny uko�nik ("\") lub apostrof ("\'"), nale�y je poprzedzi� odwrotnym uko�nikiem (np.: \'\\\\xyz\' lub \'a\\\'b\').';
$strMIME_without = 'Typy MIME pisane czcionk� pochylon� nie maj� odzielnej funkcji transformacji';
$strMaximumSize = 'Maksymalny rozmiar: %s%s';
$strModifications = 'Modyfikacje zosta�y zapami�tane';
$strModify = 'Modyfikacja';
$strModifyIndexTopic = 'Modyfikacja indeksu';
$strMoreStatusVars = 'Wi�cej zmiennych statusu';
$strMoveTable = 'Przeniesienie tabeli do (bazadanych<b>.</b>tabela):';
$strMoveTableOK = 'Tabela %s zosta�a przeniesiona do %s.';
$strMoveTableSameNames = 'Nie mo�na przenie�� tabeli do niej samej!';
$strMultilingual = 'wiele j�zyk�w';
$strMustSelectFile = 'Nale�y wybra� plik, kt�ry chcesz wstawi�.';
$strMySQLCharset = 'System kodowania znak�w dla MySQL';
$strMySQLReloaded = 'MySQL prze�adowany.';
$strMySQLSaid = 'MySQL zwr�ci� komunikat: ';
$strMySQLServerProcess = 'MySQL %pma_s1% uruchomiony na %pma_s2% jako %pma_s3%';
$strMySQLShowProcess = 'Pokazuj procesy';
$strMySQLShowStatus = 'Informacje o stanie serwera MySQL';
$strMySQLShowVars = 'Zmienne systemowe serwera MySQL';

$strName = 'Nazwa';
$strNext = 'Nast�pne';
$strNo = 'Nie';
$strNoDatabases = 'Brak baz danych';
$strNoDatabasesSelected = '�adna baza danych nie zosta� wybrana.';
$strNoDescription = 'brak opisu';
$strNoDropDatabases = 'Polecenie "DROP DATABASE" jest zablokowane.';
$strNoExplain = 'Pomi� wyja�nienie SQL';
$strNoFrames = 'phpMyAdmin jest bardziej przyjazny w przegl�darkach <b>obs�uguj�cych ramki</b>';
$strNoIndex = 'Brak zdefiniowanego indeksu!';
$strNoIndexPartsDefined = 'Brak zdefiniowanych cz�ci indeksu!';
$strNoModification = 'Bez zmian';
$strNoOptions = 'Ten format nie ma �adnych opcji';
$strNoPassword = 'Brak has�a';
$strNoPermission = 'Serwer WWW nie ma praw do zapisu pliku %s.';
$strNoPhp = 'bez kodu PHP';
$strNoPrivileges = 'Brak uprawnie�';
$strNoQuery = 'Brak zapytania SQL!';
$strNoRights = 'Brak wystarczaj�cych uprawnie�!';
$strNoSpace = 'Brak miejsca na zapis pliku %s.';
$strNoTablesFound = 'Nie znaleziono tabeli w bazie danych.';
$strNoUsersFound = 'Nie znaleziono u�ytkownika(�w).';
$strNoValidateSQL = 'Pomi� sprawdzanie poprawno�ci SQL';
$strNone = 'Brak';
$strNotNumber = 'To nie jest liczba!';
$strNotOK = 'b��d';
$strNotSet = 'Tabela <b>%s</b> nie zosta�a znaleziona lub nie jest ustawiona w %s';
$strNotValidNumber = ' nie jest poprawnym numerem rekordu!';
$strNull = 'Null';
$strNumSearchResultsInTable = '%s trafie� wewn�trz tabeli <i>%s</i>';
$strNumSearchResultsTotal = '<b>W sumie:</b> <i>%s</i> trafie�';
$strNumTables = 'Tabele';

$strOK = 'OK';
$strOftenQuotation = 'Znaki cudzys�owu. OPCJONALNIE oznacza, �e tylko pola char oraz varchar s� zawarte w "cudzys�owach".';
$strOperations = 'Operacje';
$strOptimizeTable = 'Optymalizacja tabeli';
$strOptionalControls = 'Opcjonalnie. Okre�lenie w jaki spos�b zapisa� lub odczyta� znaki specjalne.';
$strOptionally = 'OPCJONALNIE';
$strOr = 'Lub';
$strOverhead = 'Nadmiar';
$strOverwriteExisting = 'Nadpisywanie istniej�cych plik�w';

$strPHP40203 = 'U�ywasz PHP w wersji 4.2.3, kt�ra ma powa�ny b��d w obs�udze napis�w wielobajtowych (mbstring). Zobacz raport na temat b��d�w PHP nr 19404. Nie zaleca si� u�ywania tej wersji PHP z phpMyAdminem.';
$strPHPVersion = 'Wersja PHP';
$strPageNumber = 'Numer strony:';
$strPaperSize = 'Rozmiar papieru';
$strPartialText = 'Skr�cony tekst';
$strPassword = 'Has�o';
$strPasswordChanged = 'Has�o dla %s zosta�o pomy�lnie zmienione.';
$strPasswordEmpty = 'Puste has�o!';
$strPasswordNotSame = 'Has�a nie s� identyczne!';
$strPdfDbSchema = 'Schemat bazy danych "%s" - strona %s';
$strPdfInvalidTblName = 'Tabela "%s" nie istnieje!';
$strPdfNoTables = 'Brak tabel';
$strPerHour = 'na godzin�';
$strPerMinute = 'na minut�';
$strPerSecond = 'na sekund�';
$strPhoneBook = 'ksi��ka telefoniczna';
$strPhp = 'Utw�rz kod PHP';
$strPmaDocumentation = 'Dokumentacja phpMyAdmina';
$strPmaUriError = 'Dyrektywa <tt>$cfg[\'PmaAbsoluteUri\']</tt> musi by� ustawiona w pliku konfiguracyjnym!';
$strPortrait = 'Orientacja pionowa';
$strPos1 = 'Pocz�tek';
$strPrevious = 'Poprzednie';
$strPrimary = 'Podstawowy';
$strPrimaryKeyHasBeenDropped = 'Klucz podstawowy zosta� usuni�ty';
$strPrimaryKeyName = 'Nazw� podstawowego klucza musi by�... PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" <b>musi</b> by� nazw� <b>jedynie</b> klucza podstawowego!)';
$strPrint = 'Drukowanie';
$strPrintView = 'Widok do wydruku';
$strPrintViewFull = 'Widok do wydruku (z pe�nymi tekstami)';
$strPrivDescAllPrivileges = 'Zawiera wszystkie uprawnienia, opr�cz GRANT.';
$strPrivDescAlter = 'Pozwala zmienia� struktur� istniej�cych tabel.';
$strPrivDescCreateDb = 'Pozwala tworzy� nowe bazy danych i tabele.';
$strPrivDescCreateTbl = 'Pozwala tworzy� nowe tabele.';
$strPrivDescCreateTmpTable = 'Pozwala tworzy� tabele tymczasowe.';
$strPrivDescDelete = 'Pozwala usuwa� dane.';
$strPrivDescDropDb = 'Pozwala usuwa� bazy danych i tabele.';
$strPrivDescDropTbl = 'Pozwala usuwa� tabele.';
$strPrivDescExecute = 'Pozwala uruchamia� zapami�tane procedury; Nie ma �adnych skutk�w w tej wersji MySQL.';
$strPrivDescFile = 'Pozwala importowa� i eksportowa� dane z/do plik�w.';
$strPrivDescGrant = 'Pozwala dodawa� u�ytkownik�w i nadawa� uprawnienia bez prze�adowywania tabeli uprawnie�.';
$strPrivDescIndex = 'Pozwala tworzy� i usuwa� indeksy.';
$strPrivDescInsert = 'Pozwala wstawia� i zamienia� dane.';
$strPrivDescLockTables = 'Pozwala blokowa� tabele dla aktualnego w�tku.';
$strPrivDescMaxConnections = 'Ogranicza liczb� nowych po��cze�, kt�re mo�e otworzy� u�ytkownik w ci�gu godziny.';
$strPrivDescMaxQuestions = 'Ogranicza liczb� zapyta�, kt�re mo�e wys�a� u�ytkownik w ci�gu godziny.';
$strPrivDescMaxUpdates = 'Ogranicza liczb� polece� zmieniaj�cych jak�kolwiek tabel� lub baz� danych, kt�re mo�e wykona� u�ytkownik w ci�gu godziny.';
$strPrivDescProcess3 = 'Pozwala unicestwia� procesy innych u�ytkownik�w.';
$strPrivDescProcess4 = 'Pozwala zobaczy� pe�n� list� zapyta� na li�cie proces�w.';
$strPrivDescReferences = 'Nie ma �adnych skutk�w w tej wersji MySQL.';
$strPrivDescReload = 'Pozwala prze�adowywa� ustawienia serwera i opr�nia� pami�� podr�czn� serwera.';
$strPrivDescReplClient = 'Nadaje u�ytkownikowi prawo, by zapyta� gdzie s� serwery podrz�dne / nadrz�dne.';
$strPrivDescReplSlave = 'Potrzebne dla replikacji serwera podrz�dnego.';
$strPrivDescSelect = 'Pozwala czyta� dane.';
$strPrivDescShowDb = 'Daje dost�p do pe�nej listy baz danych.';
$strPrivDescShutdown = 'Pozwala zamkn�� serwer.';
$strPrivDescSuper = 'Pozwala na po��czenie, nawet je�li osi�gni�ta zosta�a maksymalna ilo�� po��cze�; Wymagana dla wi�kszo�� operacji administracyjnych, takich jak ustawianie zmiennych globalnych czy unicestwianie w�tk�w innych u�ytkownik�w.';
$strPrivDescUpdate = 'Pozwala zmienia� dane.';
$strPrivDescUsage = 'Brak uprawnie�.';
$strPrivileges = 'Uprawnienia';
$strPrivilegesReloaded = 'Uprawnienia zosta�y pomy�lnie prze�adowane.';
$strProcesslist = 'Lista proces�w';
$strProperties = 'W�a�ciwo�ci';
$strPutColNames = 'Umie�� nazwy p�l w pierwszym rekordzie';

$strQBE = 'Zapytanie przez przyk�ad';
$strQBEDel = 'Usu�';
$strQBEIns = 'Wstaw';
$strQueryFrame = 'Okienko zapytania';
$strQueryOnDb = 'Zapytanie SQL dla bazy danych <b>%s</b>:';
$strQuerySQLHistory = 'Historia SQL';
$strQueryStatistics = '<b>Statystyki zapyta�</b>: Od rozpocz�cia jego pracy, do serwera zosta�o wys�anych %s zapyta�.';
$strQueryTime = 'Wykonanie zapytania trwa�o %01.4f sekund(y)';
$strQueryType = 'Rodzaj zapytania';
$strQueryWindowLock = 'Nie nadpisuj tego zapytania spoza okna';

$strReType = 'Ponownie';
$strReceived = 'Otrzymane';
$strRecords = 'Rekordy';
$strReferentialIntegrity = 'Sprawdzenie sp�jno�ci powi�za�:';
$strRelationNotWorking = 'Dodatkowe mo�liwo�ci pracy z po��czonymi tabelami zosta�y wy��czone. Aby dowiedzie� si�, dlaczego - kliknij %stutaj%s.';
$strRelationView = 'Widok relacyjny';
$strRelationalSchema = 'Schemat relacyjny';
$strRelations = 'Relacje';
$strReloadFailed = 'Nie powiod�o si� prze�adowanie MySQL.';
$strReloadMySQL = 'Prze�adowanie MySQL';
$strReloadingThePrivileges = 'Prze�adowanie uprawnie�';
$strRemoveSelectedUsers = 'Usuni�cie zaznaczonych u�ytkownik�w';
$strRenameTable = 'Zmiana nazwy tabeli na';
$strRenameTableOK = 'Tabela %s ma zmienion� nazw� na %s';
$strRepairTable = 'Naprawienie tabeli';
$strReplace = 'Zamiana';
$strReplaceNULLBy = 'Zamienienie NULL przez';
$strReplaceTable = 'Zamiana danych tabeli z plikiem';
$strReset = 'Reset';
$strResourceLimits = 'Ograniczenia zasob�w';
$strRevoke = 'Cofni�cie';
$strRevokeAndDelete = 'Cofni�cie wszystkich aktywnych uprawnie� u�ytkownikom, a nast�pnie ich usuni�cie.';
$strRevokeAndDeleteDescr = 'Nim uprawnienia zostan� prze�adowane, u�ytkownicy nadal b�d� mieli uprawnienie USAGE.';
$strRevokeMessage = 'Cofni�te zosta�y uprawnienia dla %s';
$strRowLength = 'D�ugo�� rekordu';
$strRowSize = ' Rozmiar rekordu ';
$strRows = 'Rekord�w';
$strRowsFrom = 'rekord�w pocz�wszy od';
$strRowsModeFlippedHorizontal = 'poziomo (obr�cone nag��wki)';
$strRowsModeHorizontal = 'poziomo';
$strRowsModeOptions = 'w trybie %s powt�rz nag��wki po %s kom�rkach';
$strRowsModeVertical = 'pionowo';
$strRowsStatistic = 'Statystyka rekord�w';
$strRunQuery = 'Wykonanie zapytania';
$strRunSQLQuery = 'Wykonanie zapytania/zapyta� SQL do bazy danych %s';
$strRunning = 'uruchomiony na %s';
$strRussian = 'Rosyjski';

$strSQL = 'SQL';
$strSQLExportType = 'Rodzaj eksportu';
$strSQLOptions = 'Opcje SQL';
$strSQLParserBugMessage = 'Istnieje szansa, �e w�a�nie znalaz�e� b��d w analizatorze sk�adni SQL. Zbadaj bli�ej swoje zapytanie i sprawd�, czy cudzys�owy s� poprawne i dobrze sparowane. Inn� mo�liw� przyczyn� niepowodzenia mo�e by� to, �e wysy�asz plik ze znakami binarnymi poza obszarem tekstu uj�tego w cudzys�owy. Mo�esz r�wnie� sprawdzi� swoje zapytanie SQL poprzez lini� polece� MySQL. W znalezieniu przyczyny problemu mo�e pom�c tak�e - je�li si� pojawi - poni�szy opis b��du serwera MySQL. Je�li nadam masz problemy lub analizator sk�adni zg�asza usterk� a linia polece� - nie, ogranicz sekwencj� zapyta� SQL do pojedynczego, kt�re powoduje problemy i zg�osi� b��d, do��czaj�c fragment danych zawarty w poni�szej sekcji TNIJ:';
$strSQLParserUserError = 'Wygl�da na to, �e w twoim zapytaniu SQL jest b��d. W znalezieniu przyczyny problemu mo�e pom�c tak�e - je�li si� pojawi - poni�szy opis b��du serwera MySQL.';
$strSQLQuery = 'zapytanie SQL';
$strSQLResult = 'Rezultat SQL';
$strSQPBugInvalidIdentifer = 'Nieprawid�owy identyfikator';
$strSQPBugUnclosedQuote = 'Niezamkni�ty cudzys��w';
$strSQPBugUnknownPunctuation = 'Nieznany znak przestankowy';
$strSave = 'Zachowanie';
$strSaveOnServer = 'Zapisz na serwerze w katalogu %s';
$strScaleFactorSmall = 'Wsp�czynnik skali jest za ma�y, by schemat zmie�ci� si� na jednej stronie';
$strSearch = 'Szukaj';
$strSearchFormTitle = 'Szukaj w bazie danych';
$strSearchInTables = 'Wewn�trz tabel(i):';
$strSearchNeedle = 'Szukane s�owo (s�owa) lub warto�� (warto�ci)  (symbol wieloznaczny: "%"):';
$strSearchOption1 = 'przynajmniej jedno ze s��w';
$strSearchOption2 = 'wszystkie s�owa';
$strSearchOption3 = 'ca�a fraza';
$strSearchOption4 = 'jako wyra�enie regularne';
$strSearchResultsFor = 'Szukaj w rezultatach dla "<i>%s</i>" %s:';
$strSearchType = 'Znajd�:';
$strSecretRequired = 'Plik konfiguracyjny wymaga teraz tajnej frazy koduj�cej (blowfish_secret).';
$strSelectADb = 'Prosz� wybra� baz� danych';
$strSelectAll = 'Zaznaczenie wszystkich';
$strSelectFields = 'Wyb�r p�l (co najmniej jedno):';
$strSelectNumRows = 'w zapytaniu';
$strSelectTables = 'Wybierz tabele';
$strSend = 'Zapisz jako plik';
$strSent = 'Wys�ane';
$strServer = 'Serwer';
$strServerChoice = 'Wyb�r serwera';
$strServerStatus = 'Informacje o dzia�aniu serwera';
$strServerStatusUptime = 'Ten serwer MySQL dzia�a przez %s. Rozpocz�cie jego pracy: %s.';
$strServerTabProcesslist = 'Procesy';
$strServerTabVariables = 'Zmienne';
$strServerTrafficNotes = '<b>Ruch na serwerze</b>: Poni�sze tabele pokazuj� statystyki ruchu na tym serwerze MySQL od rozpocz�cia jego pracy.';
$strServerVars = 'Zmienne i ustawienia serwera';
$strServerVersion = 'Wersja serwera';
$strSessionValue = 'Warto�� sesji';
$strSetEnumVal = 'Je�eli pole jest typu "ENUM" lub "SET", warto�ci wprowadza si� w formacie: \'a\',\'b\',\'c\'...<br />Je�eli potrzeba wprowadzi� odwrotny uko�nik ("\") lub apostrof ("\'"), nale�y je poprzedzi� odwrotnym uko�nikiem (np.: \'\\\\xyz\' lub \'a\\\'b\').';
$strShow = 'Pokazanie';
$strShowAll = 'Pokazanie wszystkiego';
$strShowColor = 'Poka� kolor';
$strShowDatadictAs = 'Format s�ownika danych';
$strShowFullQueries = 'Pokazywanie pe�nych zapyta�';
$strShowGrid = 'Poka� siatk�';
$strShowPHPInfo = 'Informacje o PHP';
$strShowTableDimension = 'Poka� wymiary tabel';
$strShowTables = 'Pokazanie tabel';
$strShowThisQuery = ' Ponowne wywo�anie tego zapytania ';
$strShowingRecords = 'Pokazanie rekord�w ';
$strSimplifiedChinese = 'Chi�ski uproszczony';
$strSingly = '(pojedynczo)';
$strSize = 'Rozmiar';
$strSort = 'Sortuj';
$strSortByKey = 'Sortowanie wg klucza';
$strSpaceUsage = 'Wykorzystanie przestrzeni';
$strSplitWordsWithSpace = 'S�owa s� rozdzielane znakiem spacji (" ").';
$strStatCheckTime = 'Ostatnie sprawdzenie';
$strStatCreateTime = 'Utworzenie';
$strStatUpdateTime = 'Ostatnia aktualizacja';
$strStatement = 'Cecha';
$strStatus = 'Status';
$strStrucCSV = 'dane CSV';
$strStrucData = 'Struktura i dane';
$strStrucDrop = 'Dodanie DROP TABLE';
$strStrucExcelCSV = 'CSV dla MS Excel';
$strStrucOnly = 'Tylko struktura';
$strStructPropose = 'Propozycja struktury tabeli';
$strStructure = 'Struktura';
$strSubmit = 'Wys�anie';
$strSuccess = 'Zapytanie SQL zosta�o pomy�lnie wykonane';
$strSum = 'Suma';
$strSwedish = 'Szwedzki';
$strSwitchToTable = 'Prze��czenie na skopiowan� tabel�';

$strTable = 'Tabela';
$strTableComments = 'Komentarze tabeli';
$strTableEmpty = 'Brak nazwy tabeli!';
$strTableHasBeenDropped = 'Tabela %s zosta�a usuni�ta';
$strTableHasBeenEmptied = 'Tabela %s zosta�a opr�niona';
$strTableHasBeenFlushed = 'Tabela %s zosta�a prze�adowana';
$strTableMaintenance = 'Zarz�dzanie tabel�';
$strTableOfContents = 'Spis tre�ci';
$strTableOptions = 'Opcje tabeli';
$strTableStructure = 'Struktura tabeli dla ';
$strTableType = 'Typ tabeli';
$strTables = '%s tabel(a)';
$strTblPrivileges = 'Uprawnienia specyficzne dla tabel';
$strTextAreaLength = ' To pole mo�e nie by� edytowalne,<br /> z powodu swojej d�ugo�ci ';
$strThai = 'Tajski';
$strTheContent = 'Zawarto�� pliku zosta�a do��czona.';
$strTheContents = 'Zawarto�� pliku zast�pi�a dane wybranej tabeli, kt�rych podstawowy lub unikalny klucz by� identyczny.';
$strTheTerminator = 'Znak rozdzielaj�cy pola.';
$strThisHost = 'Ten host';
$strThisNotDirectory = 'To nie by� katalog';
$strThreadSuccessfullyKilled = 'W�tek %s zosta� pomy�lnie unicestwiony.';
$strTime = 'Czas';
$strToggleScratchboard = 'w��cz / wy��cz scratchboard';
$strTotal = 'wszystkich';
$strTotalUC = 'Sumarycznie';
$strTraditionalChinese = 'Chi�ski tradycyjny';
$strTraffic = 'Ruch';
$strTransformation_application_octetstream__download = 'Wy�wietla link do �ci�gni�cia binarnych danych z tego pola. Pierwsza opcja to nazwa pliku binarnego. Drug� opcj� jest mo�liwa nazwa pola zawieraj�cego nazw� pliku. Je�eli dana jest druga opcja, pierwsza musi by� pustym napisem';
$strTransformation_image_jpeg__inline = 'Wy�wietla klikaln� miniaturk�; opcje: szeroko��,wysoko�� w pikselach (oryginalne proporcje zostan� zachowane)';
$strTransformation_image_jpeg__link = 'Wy�wietla link do tego obrazu (bezpo�rednie �ci�gni�cie bloba).';
$strTransformation_image_png__inline = 'Zobacz image/jpeg: inline';
$strTransformation_text_plain__dateformat = 'Bierze pole TIME, TIMESTAMP lub DATETIME i formatuje je u�ywaj�c lokalnego formatu daty. Pierwsza opcja to liczba godzin, jaka zostanie dodana do daty (domy�lnie: 0). Druga opcja to inny format daty, zgodny z parametrami dost�pnymi dla funkcji PHP strftime().';
$strTransformation_text_plain__external = 'TYLKO LINUX: Uruchamia zewn�trzn� aplikacj� i przekazuje dane p�l na standardowe wej�cie. Zwraca standardowe wyj�cie tej aplikacji. Domy�lnie jest to Tidy, kt�rzy porz�dkuje kod HTML. Ze wzgl�du na bezpiecze�stwo, musisz r�cznie zmodyfkowa� plik libraries/transformations/text_plain__external.inc.php i wstawi� narz�dzie, na kt�rego uruchamianie pozwalasz. Pierwsz� opcj� jest liczba program�w, kt�rych chcesz u�y�, a drug� s� parametry programu. Je�eli trzeci parametr jest ustawiony na 1, zostanie dokonana konwersja wyj�cia poprzez u�ycie htmlspecialchars() (Domy�ln� warto�ci� jest 1). Je�eli czwarty parametr zosta� ustawiony na 1, zawarto�� kom�rki nie b�dzie zawijana, tak �e ca�e wyj�cie zostanie pokazane bez zmian formatu (domy�ln� warto�ci� jest 1)';
$strTransformation_text_plain__formatted = 'Zachowuje orygialne formatowanie pola. Neutralizowanie znak�w niespecjalnych nie jest dokonywane.';
$strTransformation_text_plain__imagelink = 'Wy�wietla obrazek i link, pole zawiera nazw� pliku; pierwsz� opcj� jest prefiks, taki jak "http://domena.com/", drug� opcj� jest szeroko�� w pikselach, trzeci� opcj� jest wysoko��.';
$strTransformation_text_plain__link = 'Wy�wietla link, pole zawiera nazw� pliku; pierwsza opcja to prefiks, taki jak "http://domena.com/", druga opcja to tytu� linku.';
$strTransformation_text_plain__substr = 'Pokazuje jedynie cz�� napisu. Pierwsza opcja to offset, od kt�rego ma zacz�� si� wy�wietlanie tekstu (domy�lnie 0). Druga opcja to ilo�� zwracanego tekstu. Je�eli jest pusta, zwracany jest ca�y pozosta�y tekst. Trzecia opcja okre�la jakie znaki zostan� dodane do wyj�cia, je�eli zwracany jest cz�� napisu (domy�lnie: ...) .';
$strTransformation_text_plain__unformatted = 'Wy�wietla kod HTML przy pomocy encji HTML. Formatowanie HTML nie jest pokazywane.';
$strTruncateQueries = 'Obcinanie wy�wietlane zapyta�';
$strTurkish = 'Turecki';
$strType = 'Typ';

$strUkrainian = 'Ukrai�ski';
$strUncheckAll = 'Odznaczenie wszystkich';
$strUnicode = 'Unikod';
$strUnique = 'Unikalny';
$strUnknown = 'nieznany';
$strUnselectAll = 'Odznaczenie wszystkich';
$strUpdComTab = 'Informacje o tym, jak zaktualizowa� tabel� Column_comments znajduj� si� w dokumentacji';
$strUpdatePrivMessage = 'Uaktualni�e� uprawnienia dla %s.';
$strUpdateProfileMessage = 'Profil zosta� uaktualniony.';
$strUpdateQuery = 'Zmiana zapytania';
$strUpgrade = 'Poleca si� aktualizacj� do %s w wersji %s lub p�niejszej.';
$strUsage = 'Wykorzystanie';
$strUseBackquotes = 'U�ycie cudzys�ow�w z nazwami tabel i p�l';
$strUseHostTable = 'U�ycie tabeli host�w';
$strUseTables = 'U�ycie tabel';
$strUseTextField = 'U�ycie pola tekstowego';
$strUseThisValue = 'U�ycie tej warto�ci';
$strUser = 'U�ytkownik';
$strUserAlreadyExists = 'U�ytkownik %s ju� istnieje!';
$strUserEmpty = 'Brak nazwy u�ytkownika!';
$strUserName = 'Nazwa u�ytkownika';
$strUserNotFound = 'Wybrany u�ytkownik nie zosta� znaleziony w tabeli uprawnie�.';
$strUserOverview = 'Opis u�ytkownika';
$strUsersDeleted = 'Wybrani u�ytkownicy zostali pomy�lnie usuni�ci.';
$strUsersHavingAccessToDb = 'U�ytkownicy maj�cy dost�p do &quot;%s&quot;';

$strValidateSQL = 'Sprawdzanie proprawno�ci SQL';
$strValidatorError = 'Analizator sk�adni SQL nie m�g� zosta� zainicjalizowany. Sprawd�, czy zainstalowane s� niezb�dne rozszerzenia php, tak jak zosta�o to opisane w %sdokumentacji%s.';
$strValue = 'Warto��';
$strVar = 'Zmienna';
$strViewDump = 'Zrzut tabeli';
$strViewDumpDB = 'Zrzut bazy danych';
$strViewDumpDatabases = 'Zobacz zrzut (schemat) baz danych';

$strWebServerUploadDirectory = 'katalog serwera www dla uploadu';
$strWebServerUploadDirectoryError = 'Katalog ustalony dla uploadu jest nieosi�galny';
$strWelcome = 'Witamy w %s';
$strWestEuropean = 'Zachodnioeuropejski';
$strWildcard = 'znak wieloznaczny';
$strWindowNotFound = 'Docelowe okno przegl�darki nie mog�o by� zaktualizowane. By� mo�e okno-rodzic zosta�o zamkni�te lub przegl�darka, uwzgl�dniaj�c ustawienia bezpiecze�stwa, blokuje aktualizacje pomi�dzy oknami';
$strWithChecked = 'Zaznaczone:';
$strWritingCommentNotPossible = 'Zapisanie komentarza nie jest mo�liwe';
$strWritingRelationNotPossible = 'Zapisanie relacji nie jest mo�liwe';
$strWrongUser = 'B��dne pola u�ytkownik/has�o. Brak dost�pu.';

$strXML = 'XML';

$strYes = 'Tak';

$strZeroRemovesTheLimit = 'Uwaga: Ustawienie tych opcji na 0 (zero) usuwa ograniczenie.';
$strZip = '".zip"';

// To translate:
$strAddHeaderComment = 'Add custom comment into header (\\n splits lines)';  //to translate
$strAddIfNotExists = 'Add IF NOT EXISTS';  //to translate
$strAfterInsertSame = 'Go back to this page';  //to translate

$strCommentsForTable = 'COMMENTS FOR TABLE';  //to translate

$strDBRename = 'Rename database to';  //to translate
$strDatabaseEmpty = 'The database name is empty!';  //to translate

$strIgnoreInserts = 'Use ignore inserts';  //to translate

$strMIMETypesForTable = 'MIME TYPES FOR TABLE';  //to translate

$strNeedPrimaryKey = 'You should define a primary key for this table.';  //to translate

$strRelationsForTable = 'RELATIONS FOR TABLE';  //to translate
$strRenameDatabaseOK = 'Database %s has been renamed to %s';  //to translate

$strOperator = 'Operator';  //to translate
$strEncloseInTransaction = 'Enclose export in a transaction';  //to translate
$strCalendar = 'Calendar';  //to translate
$strRefresh = 'Refresh';  //to translate
$strDefragment = 'Defragment table';  //to translate
$strNoRowsSelected = 'No rows selected';  //to translate
$strSpanish = 'Spanish';  //to translate
$strStrucNativeExcel = 'Native MS Excel data';  //to translate
$strDisableForeignChecks = 'Disable foreign key checks';  //to translate
$strServerNotResponding = 'The server is not responding';  //to translate
$strTheme = 'Theme / Style';  //to translate
$strTakeIt = 'take it';  //to translate
$strHexForBinary = 'Use hexadecimal for binary fields';  //to translate
$strIcelandic = 'Icelandic';  //to translate
$strLatvian = 'Latvian';  //to translate
$strPolish = 'Polish';  //to translate
$strRomanian = 'Romanian';  //to translate
$strSlovenian = 'Slovenian';  //to translate
$strTraditionalSpanish = 'Traditional Spanish';  //to translate
$strSlovak = 'Slovak';  //to translate
?>
