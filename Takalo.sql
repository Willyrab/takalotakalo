CREATE TABLE Utilisateur(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom varchar(50),
    prenom varchar(50),
    mot_de_passe varchar(50),
    email varchar(50),
    date_Naissance Date,
    adresse varchar(50),
    tel varchar(10)
);
CREATE TABLE Admin(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom varchar(50),
    mot_de_passe varchar(50),
    email varchar(50)
);
CREATE TABLE Categorie(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom varchar(50)
);
CREATE TABLE Objets(
    id INT AUTO_INCREMENT PRIMARY KEY,
    titre varchar(20),
    descriptions text,
    prix_estimatif DECIMAL,
    id_utilisateur INT,
    FOREIGN KEY(id_utilisateur) REFERENCES Utilisateur(id)
);
CREATE TABLE Photo(
    id INT AUTO_INCREMENT PRIMARY KEY,
    chemin varchar(50)
);
CREATE TABLE Photo_Objet(
    id_Objet INT,
    id_Photo INT,
    FOREIGN KEY(id_Photo) REFERENCES Photo(id),
    FOREIGN KEY(id_Objet) REFERENCES Objets(id)
);

CREATE TABLE Proposition(
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_UserEchange INT,
    id_ObjetEchange INT,
    id_ObjetDemande INT,
    id_UserDemande INT,
    date_proposition DATETIME,
    FOREIGN KEY(id_ObjetEchange) REFERENCES Objets(id),
    FOREIGN KEY(id_ObjetDemande) REFERENCES Objets(id),
    FOREIGN KEY(id_UserEchange) REFERENCES Utilisateur(id),
    FOREIGN KEY(id_UserDemande) REFERENCES Utilisateur(id)
);
CREATE TABLE Acceptation(
    id_proposition INT,
    dateAcceptation DATETIME,
    FOREIGN KEY(id_proposition) REFERENCES Proposition(id)
);
CREATE TABLE Refus(
    id_proposition INT,
    dateRefus DATETIME,
    FOREIGN KEY(id_proposition) REFERENCES Proposition(id)    
);

CREATE VIEW vw_propositionsValides AS SELECT * FROM proposition WHERE proposition.id 
NOT IN (SELECT id_proposition FROM acceptation) AND 
proposition.id NOT IN (SELECT id_proposition FROM refus);

INSERT INTO Admin VALUES(null,'Administrator','s3cr3t','ADMIN@yahoo.com');

INSERT INTO Utilisateur VALUES(null,'Nebra','Mathieu','MN','MN@gmail.com','1995-12-10','Lot IVI 10 B Andoharanonfotsy',' 0326828504');
INSERT INTO Utilisateur VALUES(null,'Castor','Laurene','LC','LC@gmail.com','1997-10-24',' LOS ANGELES',' 0384512943');
INSERT INTO Utilisateur VALUES(null,'Jean','Ive','JI','JI@yahoo.com','2000-11-05','ABC Analakely','0345461295');
INSERT INTO Utilisateur VALUES(null,'Rakoto','Nirina','RN','RN@yahoo.com','1990-07-14','G34 Tanjombato','0325478210');
INSERT INTO Utilisateur VALUES(null,'Rasoa','Malala','RM','RM@gmail.com','1999-09-24','BJ10 Ankadimbahoaka',' 0334383920');

INSERT INTO Categorie VALUES(null,'Informatique');
INSERT INTO Categorie VALUES(null,'Accessoires');
INSERT INTO Categorie VALUES(null,'Chaussure');
INSERT INTO Categorie VALUES(null,'Transport');
INSERT INTO Categorie VALUES(null,'Vetements');
INSERT INTO Categorie VALUES(null,'Meuble');
INSERT INTO Categorie VALUES(null,'Electromenager');

INSERT INTO Objets VALUES (null,'Moto senke','Senke : Deplacement	199,80 cc ,Type de Moteur monocylindre, 4 temps,Admission par carburateur, MOTEUR ET TRANSMISSION, Deplacement 199,80 cc , Type de Moteur monocylindre, 4 temps, Admission Admission par carburateur, Refroidissement par air,Transmission 5 vitesses, Entrainement par chaine',37000000,1);
INSERT INTO Objets VALUES (null,'Robust-car','Int ext d''origine, voiture bien entretenu Jantes alu d''origine avec accessoire complet et d''origine, feux par choc, 5 portes, verrouillage centralise, kit chrome moteur essence 1.1 impeccable 80.000km: 4 cylindres puissant mais economique: 3-4L/100 boite manuelle interieur 5 places cuir  confort et propre 4 vitres electriques, auto radio Cd origine, clim, kit main libre, direction assistee , Airbags , ABS... Voiture agreable et facile a conduire',135000000,2);
INSERT INTO Objets VALUES (null,'Canon-pro','Dote de notre technologie d''autofocus intelligente, le systeme prime, EOS R, beneficie d''une gamme exceptionnelle d''objectifs RF et offre une approche tres intuitive de la photographie et de la video. Il s''adapte a votre style pour vous aider a rester concentre sur votre sujet et sur votre art.',16500000,3);
INSERT INTO Objets VALUES (null,'Acer 21.5','Acer 21.5" LED - V227QAbmipx 1920 x 1080 pixels - 4 ms (gris a gris) - Format 16/9 - Dalle VA - 75 Hz - VGA/HDMI/DisplayPort - Haut-parleurs - Ideal pour la bureautique, le moniteur Acer V227QAbmipx repondra a toutes vos attentes ! Retrouvez une belle image Full HD de 21.5 pouces, un confort oculaire superieur ainsi qu''une connectique complete avec ports HDMI, DisplayPort et VGA.',1300000,4);
INSERT INTO Objets VALUES (null,'Dell Latitude 7490','Le prix de l''ordinateur portable Dell Latitude 7490 (8e generation Core i5/ 16 Go/ 512 Go SSD/ Win10 Pro)  Il etait disponible au prix le plus bas sur Amazon en Inde le 8 fevrier 2023. Jetez un œil aux specifications et fonctionnalites detaillees de l''ordinateur portable Dell Latitude 7490 (8e generation Core i5/16 Go/512 Go SSD/Win10 Pro).',5250000,5);
INSERT INTO Objets VALUES (null,'Aspirateur robot Irobot Roomba','pour aspirer - Carrelages, parquets, tapis, moquettes Navigation par cartographie de la piece,Detection des marches/obstacles/ Vide : Permet d''eviter tout accident avec l''aspirateur, Compatibilite assistant vocal : Google, Alexa, Siri, Le + : Son systeme de cartographie avance permet de choisir la piece a aspirer',597430,1);
INSERT INTO Objets VALUES (null,'KICKFLIP BACKPACK UNISEX - Sac a dos','Le sac a dos homme est un bagage tres pratique, revenu a la mode grace a sa facilite d''usage. Les plus sportifs s’en serviront pour leurs balades et randonnees ou pour transporter leurs affaires jusqu’au gymnase, les autres en feront leur compagnon de tous les jours en transportant tout ce dont ils ne peuvent se passer pour leur journee',68000,2);
INSERT INTO Objets VALUES (null,'T-shirt Pap''s','T-shirt col montant, detail dentelle. Livraison express. T-shirt avec col rond et details en dentelle MORGAN. MORGAN. T-shirt avec col rond et ..',35000,3);
INSERT INTO Objets VALUES (null,'tennis Adidas','Ces chaussures sont concues pour le joueur de tennis debutant pratiquant sur tous types de surface avec des deplacements d''intensite moderee. Les chaussures de tennis Adidas Gamecourt associent confort et resistance grace a leur semelle en caoutchouc ADIWEAR et sa tige en mesh.',70000,4);
INSERT INTO Objets VALUES (null,'HOMIFAB','Canape d''angle convertible 2/4 places avec coffre Type de canape : Canape 2 places, Canape 3 places, Canape d''angle, Canape convertible, Materiau : Cuir, Tissu, Microfibre, Couleur : Blanc, Noir, Gris,Marron, Style : Moderne, Traditionnel, Contemporain, Dimensions : Longueur, Largeur, Hauteur, Confort : Assise,moelleuse, Dossier inclinable, Reglable en hauteur, Nombre de places assises : 2 a 6 places, Fonctionnalites : Rangement integre, Lit escamotable',1650000,5);
INSERT INTO Objets VALUES (null,'chemise','Coloris : Noir/gris/... , Dress code : bureau mariage sortie, Col :Col Francais, Matiere :popeline double retors, Tissus :Uni, Poignets  :Poignets simples a double boutonnage, Style  : Un indispensable de la garde robe',78000,1);
INSERT INTO Objets VALUES (null,'Montre Classics Quartz FC-240GRS5B6',' Celui-ci se compose d''un boitier en acier inoxydable poli de 40mm de diametre. D''une taille raisonnable, il habillera idealement un poignet homme. A droite, une petite couronne argentee vous permettra de regler heure et date. A ce boitier se joint un verre saphir de forme convexe d''une grande resistance. Au dos, le fond visse est marque de l''empreinte Frederique Constant et precise le niveau d''etancheite de 5 bar.',564000,2);
INSERT INTO Objets VALUES (null,'Magic-Optic','Type de lunettes : Lunettes de vue, Lunettes de soleil, Lunettes de sport, Marque : Ray-Ban, Oakley, Gucci, etc. Materiau des cadres : Acetate, Metal, Titane, Couleur des cadres : Noir, Argent, Or, Marron, Bleu, etc. Taille des cadres : Petite, Moyenne, Grande, Verres : Verres correcteurs, Verres polarisants, Verres photochromiques epaisseur des verres : Standard, Fin, Ultra-fin, Traitement des verres : Anti-reflets, Anti-rayures, Anti-UV',232000,3);
INSERT INTO Objets VALUES (null,'Lit king''s','Type de lit : Lit simple, Lit double, Lit king size, Lit super king size, Materiau : Bois massif, Metal,Cuir, Tissu, Couleur : Blanc, Noir, Bois naturel, Gris, Style : Moderne, Traditionnel, Contemporain, Taille : Longueur, Largeur,Hauteur, Type de sommier : a lattes, a ressorts, a memoire de forme, Matelas : Inclus ou vendu separement',4680000,4);
INSERT INTO Objets VALUES (null,'Chaise Moderne','Materiau : Bois, Metal, Cuir, Tissu, Couleur : Blanc, Noir, Gris, Marron, Style : Moderne, Traditionnel, Contemporain, Dimensions : Hauteur, Largeur, Profondeur, Confort : Reglable en hauteur, Coussin d''assise, Dossier inclinable, Poids maximum supporte : 100 kg a 150 kg, Utilisation : Interieur, Exterieur',300000,5);

INSERT INTO Photo VALUES (null,'assets/img/appareilPhoto/a1.jpg');
INSERT INTO Photo VALUES (null,'assets/img/appareilPhoto/a2.jpg');
INSERT INTO Photo VALUES (null,'assets/img/appareilPhoto/a3.jpg');
INSERT INTO Photo VALUES (null,'assets/img/appareilPhoto/a4.jpg');
INSERT INTO Photo VALUES (null,'assets/img/aspirateur/p.jpg');
INSERT INTO Photo VALUES (null,'assets/img/aspirateur/p2.jpg');
INSERT INTO Photo VALUES (null,'assets/img/aspirateur/p3.jpg');
INSERT INTO Photo VALUES (null,'assets/img/aspirateur/p4.jpg');
INSERT INTO Photo VALUES (null,'assets/img/canape/c1.jpg');
INSERT INTO Photo VALUES (null,'assets/img/canape/c2.jpg');
INSERT INTO Photo VALUES (null,'assets/img/canape/c3.jpg');
INSERT INTO Photo VALUES (null,'assets/img/canape/c4.jpg');
INSERT INTO Photo VALUES (null,'assets/img/cartable/cat1.png');
INSERT INTO Photo VALUES (null,'assets/img/cartable/cat2.png');
INSERT INTO Photo VALUES (null,'assets/img/cartable/cat3.png');
INSERT INTO Photo VALUES (null,'assets/img/cartable/cat4.png');
INSERT INTO Photo VALUES (null,'assets/img/chaise/ch1.jpg');
INSERT INTO Photo VALUES (null,'assets/img/chaise/ch2.jpg');
INSERT INTO Photo VALUES (null,'assets/img/chaise/ch3.jpg');
INSERT INTO Photo VALUES (null,'assets/img/chaise/ch4.jpg');
INSERT INTO Photo VALUES (null,'assets/img/chemise/shirt-1.png');
INSERT INTO Photo VALUES (null,'assets/img/chemise/shirt-2.png');
INSERT INTO Photo VALUES (null,'assets/img/chemise/shirt-3.png');
INSERT INTO Photo VALUES (null,'assets/img/chemise/shirt-4.png');
INSERT INTO Photo VALUES (null,'assets/img/ecran/e1.png');
INSERT INTO Photo VALUES (null,'assets/img/ecran/e2.png');
INSERT INTO Photo VALUES (null,'assets/img/ecran/e3.png');
INSERT INTO Photo VALUES (null,'assets/img/ecran/e5.png');
INSERT INTO Photo VALUES (null,'assets/img/lit/l1.jpg');
INSERT INTO Photo VALUES (null,'assets/img/lit/l2.jpg');
INSERT INTO Photo VALUES (null,'assets/img/lit/l3.jpg');
INSERT INTO Photo VALUES (null,'assets/img/lit/l4.jpg');
INSERT INTO Photo VALUES (null,'assets/img/lunettes/l1.png');
INSERT INTO Photo VALUES (null,'assets/img/lunettes/l2.png');
INSERT INTO Photo VALUES (null,'assets/img/lunettes/l3.png');
INSERT INTO Photo VALUES (null,'assets/img/lunettes/l4.png');
INSERT INTO Photo VALUES (null,'assets/img/montre/m1.png');
INSERT INTO Photo VALUES (null,'assets/img/montre/m2.png');
INSERT INTO Photo VALUES (null,'assets/img/montre/m3.png');
INSERT INTO Photo VALUES (null,'assets/img/montre/m4.png');
INSERT INTO Photo VALUES (null,'assets/img/moto/mot1.jpg');
INSERT INTO Photo VALUES (null,'assets/img/moto/mot2.jpg');
INSERT INTO Photo VALUES (null,'assets/img/moto/mot3.jpg');
INSERT INTO Photo VALUES (null,'assets/img/moto/mot4.jpg');
INSERT INTO Photo VALUES (null,'assets/img/ordi/ord1.jpg');
INSERT INTO Photo VALUES (null,'assets/img/ordi/ord2.jpg');
INSERT INTO Photo VALUES (null,'assets/img/ordi/ord3.jpg');
INSERT INTO Photo VALUES (null,'assets/img/ordi/ord4.jpg');
INSERT INTO Photo VALUES (null,'assets/img/tee_shirt/t1.png');
INSERT INTO Photo VALUES (null,'assets/img/tee_shirt/t2.png');
INSERT INTO Photo VALUES (null,'assets/img/tee_shirt/t3.png');
INSERT INTO Photo VALUES (null,'assets/img/tee_shirt/t4.png');
INSERT INTO Photo VALUES (null,'assets/img/tennis/shoe-5.png');
INSERT INTO Photo VALUES (null,'assets/img/tennis/shoe-6.png');
INSERT INTO Photo VALUES (null,'assets/img/tennis/shoe-7.png');
INSERT INTO Photo VALUES (null,'assets/img/tennis/shoe-8.png');
INSERT INTO Photo VALUES (null,'assets/img/voiture/car-1.jpg');
INSERT INTO Photo VALUES (null,'assets/img/voiture/car-2.jpg');
INSERT INTO Photo VALUES (null,'assets/img/voiture/car-4.jpg');
INSERT INTO Photo VALUES (null,'assets/img/voiture/car-5.jpg');

INSERT INTO Photo_Objet VALUES (1,41);
INSERT INTO Photo_Objet VALUES (1,42);
INSERT INTO Photo_Objet VALUES (1,43);
INSERT INTO Photo_Objet VALUES (1,44);
INSERT INTO Photo_Objet VALUES (2,57);
INSERT INTO Photo_Objet VALUES (2,58);
INSERT INTO Photo_Objet VALUES (2,59);
INSERT INTO Photo_Objet VALUES (2,60);
INSERT INTO Photo_Objet VALUES (3,1);
INSERT INTO Photo_Objet VALUES (3,2);
INSERT INTO Photo_Objet VALUES (3,3);
INSERT INTO Photo_Objet VALUES (3,4);
INSERT INTO Photo_Objet VALUES (4,25);
INSERT INTO Photo_Objet VALUES (4,26);
INSERT INTO Photo_Objet VALUES (4,27);
INSERT INTO Photo_Objet VALUES (4,28);
INSERT INTO Photo_Objet VALUES (5,45);
INSERT INTO Photo_Objet VALUES (5,46);
INSERT INTO Photo_Objet VALUES (5,47);
INSERT INTO Photo_Objet VALUES (5,48);
INSERT INTO Photo_Objet VALUES (6,5);
INSERT INTO Photo_Objet VALUES (6,6);
INSERT INTO Photo_Objet VALUES (6,7);
INSERT INTO Photo_Objet VALUES (6,8);
INSERT INTO Photo_Objet VALUES (7,13);
INSERT INTO Photo_Objet VALUES (7,14);
INSERT INTO Photo_Objet VALUES (7,15);
INSERT INTO Photo_Objet VALUES (7,16);
INSERT INTO Photo_Objet VALUES (8,49);
INSERT INTO Photo_Objet VALUES (8,50);
INSERT INTO Photo_Objet VALUES (8,51);
INSERT INTO Photo_Objet VALUES (8,52);
INSERT INTO Photo_Objet VALUES (9,53);
INSERT INTO Photo_Objet VALUES (9,54);
INSERT INTO Photo_Objet VALUES (9,55);
INSERT INTO Photo_Objet VALUES (9,56);
INSERT INTO Photo_Objet VALUES (10,9);
INSERT INTO Photo_Objet VALUES (10,10);
INSERT INTO Photo_Objet VALUES (10,11);
INSERT INTO Photo_Objet VALUES (10,12);
INSERT INTO Photo_Objet VALUES (11,21);
INSERT INTO Photo_Objet VALUES (11,22);
INSERT INTO Photo_Objet VALUES (11,23);
INSERT INTO Photo_Objet VALUES (11,25);
INSERT INTO Photo_Objet VALUES (12,37);
INSERT INTO Photo_Objet VALUES (12,38);
INSERT INTO Photo_Objet VALUES (12,39);
INSERT INTO Photo_Objet VALUES (12,40);
INSERT INTO Photo_Objet VALUES (13,33);
INSERT INTO Photo_Objet VALUES (13,34);
INSERT INTO Photo_Objet VALUES (13,35);
INSERT INTO Photo_Objet VALUES (13,36);
INSERT INTO Photo_Objet VALUES (14,29);
INSERT INTO Photo_Objet VALUES (14,30);
INSERT INTO Photo_Objet VALUES (14,31);
INSERT INTO Photo_Objet VALUES (14,32);
INSERT INTO Photo_Objet VALUES (15,17);
INSERT INTO Photo_Objet VALUES (15,18);
INSERT INTO Photo_Objet VALUES (15,19);
INSERT INTO Photo_Objet VALUES (15,20);
