<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Type;

class TypeFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        //type Acier
        $typeAcier = new Type();
        $typeAcier->setNameType("Acier");
        // multiplicate damage
        $typeAcier->setMultDamageToAcier(0.5);
        $typeAcier->setMultDamageToCombat(1);
        $typeAcier->setMultDamageToDragon(1);
        $typeAcier->setMultDamageToEau(0.5);
        $typeAcier->setMultDamageToFeu(0.5);
        $typeAcier->setMultDamageToElectrik(0.5);
        $typeAcier->setMultDamageToFee(2);
        $typeAcier->setMultDamageToGlace(2);
        $typeAcier->setMultDamageToInsecte(1);
        $typeAcier->setMultDamageToNormal(1);
        $typeAcier->setMultDamageToPlante(1);
        $typeAcier->setMultDamageToPoison(1);
        $typeAcier->setMultDamageToPsy(1);
        $typeAcier->setMultDamageToRoche(2);
        $typeAcier->setMultDamageToSol(1);
        $typeAcier->setMultDamageToSpectre(1);
        $typeAcier->setMultDamageToTenebres(1);
        $typeAcier->setMultDamageToVol(1);
        // resistance
        $typeAcier->setResAcier(0.5);
        $typeAcier->setResCombat(2);
        $typeAcier->setResDragon(0.5);
        $typeAcier->setResEau(1);
        $typeAcier->setResElectrik(1);
        $typeAcier->setResFeu(2);
        $typeAcier->setResFee(0.5);
        $typeAcier->setResGlace(0.5);
        $typeAcier->setResInsecte(0.5);
        $typeAcier->setResNormal(0.5);
        $typeAcier->setResPlante(0.5);
        $typeAcier->setResPoison(0);
        $typeAcier->setResPsy(0.5);
        $typeAcier->setResRoche(0.5);
        $typeAcier->setResSol(2);
        $typeAcier->setResSpectre(1);
        $typeAcier->setResTenebres(1);
        $typeAcier->setResVol(0.5);
        // add type
        $manager->persist($typeAcier);


        //type Combat
        $typeCombat = new Type();
        $typeCombat->setNameType("Combat");
        // multiplicate damage
        $typeCombat->setMultDamageToAcier(2);
        $typeCombat->setMultDamageToCombat(1);
        $typeCombat->setMultDamageToDragon(1);
        $typeCombat->setMultDamageToEau(1);
        $typeCombat->setMultDamageToFeu(1);
        $typeCombat->setMultDamageToElectrik(1);
        $typeCombat->setMultDamageToFee(0.5);
        $typeCombat->setMultDamageToGlace(2);
        $typeCombat->setMultDamageToInsecte(0.5);
        $typeCombat->setMultDamageToNormal(2);
        $typeCombat->setMultDamageToPlante(1);
        $typeCombat->setMultDamageToPoison(0.5);
        $typeCombat->setMultDamageToPsy(0.5);
        $typeCombat->setMultDamageToRoche(2);
        $typeCombat->setMultDamageToSol(1);
        $typeCombat->setMultDamageToSpectre(0);
        $typeCombat->setMultDamageToTenebres(2);
        $typeCombat->setMultDamageToVol(0.5);
        // resistance
        $typeCombat->setResAcier(1);
        $typeCombat->setResCombat(1);
        $typeCombat->setResDragon(1);
        $typeCombat->setResEau(1);
        $typeCombat->setResElectrik(1);
        $typeCombat->setResFeu(1);
        $typeCombat->setResFee(2);
        $typeCombat->setResGlace(1);
        $typeCombat->setResInsecte(0.5);
        $typeCombat->setResNormal(1);
        $typeCombat->setResPlante(1);
        $typeCombat->setResPoison(1);
        $typeCombat->setResPsy(2);
        $typeCombat->setResRoche(0.5);
        $typeCombat->setResSol(1);
        $typeCombat->setResSpectre(1);
        $typeCombat->setResTenebres(0.5);
        $typeCombat->setResVol(2);
        // add type
        $manager->persist($typeCombat);


        // type Dragon
        $typeDragon = new Type();
        $typeDragon->setNameType("Dragon");
        // multiplicate damage
        $typeDragon->setMultDamageToAcier(0.5);
        $typeDragon->setMultDamageToCombat(1);
        $typeDragon->setMultDamageToDragon(2);
        $typeDragon->setMultDamageToEau(1);
        $typeDragon->setMultDamageToFeu(1);
        $typeDragon->setMultDamageToElectrik(1);
        $typeDragon->setMultDamageToFee(0);
        $typeDragon->setMultDamageToGlace(1);
        $typeDragon->setMultDamageToInsecte(1);
        $typeDragon->setMultDamageToNormal(1);
        $typeDragon->setMultDamageToPlante(1);
        $typeDragon->setMultDamageToPoison(1);
        $typeDragon->setMultDamageToPsy(1);
        $typeDragon->setMultDamageToRoche(1);
        $typeDragon->setMultDamageToSol(1);
        $typeDragon->setMultDamageToSpectre(1);
        $typeDragon->setMultDamageToTenebres(1);
        $typeDragon->setMultDamageToVol(1);
        // resistance
        $typeDragon->setResAcier(1);
        $typeDragon->setResCombat(1);
        $typeDragon->setResDragon(2);
        $typeDragon->setResEau(0.5);
        $typeDragon->setResElectrik(0.5);
        $typeDragon->setResFeu(0.5);
        $typeDragon->setResFee(2);
        $typeDragon->setResGlace(2);
        $typeDragon->setResInsecte(1);
        $typeDragon->setResNormal(1);
        $typeDragon->setResPlante(0.5);
        $typeDragon->setResPoison(1);
        $typeDragon->setResPsy(1);
        $typeDragon->setResRoche(1);
        $typeDragon->setResSol(1);
        $typeDragon->setResSpectre(1);
        $typeDragon->setResTenebres(1);
        $typeDragon->setResVol(1);
        // add type
        $manager->persist($typeDragon);


        // type Eau
        $typeEau = new Type();
        $typeEau->setNameType("Eau");
        // multiplicate damage
        $typeEau->setMultDamageToAcier(1);
        $typeEau->setMultDamageToCombat(1);
        $typeEau->setMultDamageToDragon(0.5);
        $typeEau->setMultDamageToEau(0.5);
        $typeEau->setMultDamageToFeu(2);
        $typeEau->setMultDamageToElectrik(1);
        $typeEau->setMultDamageToFee(1);
        $typeEau->setMultDamageToGlace(1);
        $typeEau->setMultDamageToInsecte(1);
        $typeEau->setMultDamageToNormal(1);
        $typeEau->setMultDamageToPlante(0.5);
        $typeEau->setMultDamageToPoison(1);
        $typeEau->setMultDamageToPsy(1);
        $typeEau->setMultDamageToRoche(2);
        $typeEau->setMultDamageToSol(2);
        $typeEau->setMultDamageToSpectre(1);
        $typeEau->setMultDamageToTenebres(1);
        $typeEau->setMultDamageToVol(1);
        // resistance
        $typeEau->setResAcier(0.5);
        $typeEau->setResCombat(1);
        $typeEau->setResDragon(1);
        $typeEau->setResEau(0.5);
        $typeEau->setResElectrik(2);
        $typeEau->setResFeu(0.5);
        $typeEau->setResFee(1);
        $typeEau->setResGlace(0.5);
        $typeEau->setResInsecte(1);
        $typeEau->setResNormal(1);
        $typeEau->setResPlante(2);
        $typeEau->setResPoison(1);
        $typeEau->setResPsy(1);
        $typeEau->setResRoche(1);
        $typeEau->setResSol(1);
        $typeEau->setResSpectre(1);
        $typeEau->setResTenebres(1);
        $typeEau->setResVol(1);
        // add type
        $manager->persist($typeEau);


        // type Feu
        $typeFeu = new Type();
        $typeFeu->setNameType("Feu");
        // multiplicate damage
        $typeFeu->setMultDamageToAcier(2);
        $typeFeu->setMultDamageToCombat(1);
        $typeFeu->setMultDamageToDragon(0.5);
        $typeFeu->setMultDamageToEau(0.5);
        $typeFeu->setMultDamageToFeu(0.5);
        $typeFeu->setMultDamageToElectrik(1);
        $typeFeu->setMultDamageToFee(1);
        $typeFeu->setMultDamageToGlace(2);
        $typeFeu->setMultDamageToInsecte(2);
        $typeFeu->setMultDamageToNormal(1);
        $typeFeu->setMultDamageToPlante(2);
        $typeFeu->setMultDamageToPoison(1);
        $typeFeu->setMultDamageToPsy(1);
        $typeFeu->setMultDamageToRoche(0.5);
        $typeFeu->setMultDamageToSol(1);
        $typeFeu->setMultDamageToSpectre(1);
        $typeFeu->setMultDamageToTenebres(1);
        $typeFeu->setMultDamageToVol(1);
        // resistance
        $typeFeu->setResAcier(0.5);
        $typeFeu->setResCombat(1);
        $typeFeu->setResDragon(1);
        $typeFeu->setResEau(2);
        $typeFeu->setResElectrik(1);
        $typeFeu->setResFeu(0.5);
        $typeFeu->setResFee(0.5);
        $typeFeu->setResGlace(0.5);
        $typeFeu->setResInsecte(0.5);
        $typeFeu->setResNormal(1);
        $typeFeu->setResPlante(0.5);
        $typeFeu->setResPoison(1);
        $typeFeu->setResPsy(1);
        $typeFeu->setResRoche(2);
        $typeFeu->setResSol(2);
        $typeFeu->setResSpectre(1);
        $typeFeu->setResTenebres(1);
        $typeFeu->setResVol(1);
        // add type
        $manager->persist($typeFeu);


        // type Electrik
        $typeElectrik = new Type();
        $typeElectrik->setNameType("Electrik");
        // multiplicate damage
        $typeElectrik->setMultDamageToAcier(1);
        $typeElectrik->setMultDamageToCombat(1);
        $typeElectrik->setMultDamageToDragon(0.5);
        $typeElectrik->setMultDamageToEau(2);
        $typeElectrik->setMultDamageToFeu(1);
        $typeElectrik->setMultDamageToElectrik(0.5);
        $typeElectrik->setMultDamageToFee(1);
        $typeElectrik->setMultDamageToGlace(1);
        $typeElectrik->setMultDamageToInsecte(1);
        $typeElectrik->setMultDamageToNormal(1);
        $typeElectrik->setMultDamageToPlante(0.5);
        $typeElectrik->setMultDamageToPoison(1);
        $typeElectrik->setMultDamageToPsy(1);
        $typeElectrik->setMultDamageToRoche(1);
        $typeElectrik->setMultDamageToSol(0);
        $typeElectrik->setMultDamageToSpectre(1);
        $typeElectrik->setMultDamageToTenebres(1);
        $typeElectrik->setMultDamageToVol(2);
        // resistance
        $typeElectrik->setResAcier(0.5);
        $typeElectrik->setResCombat(1);
        $typeElectrik->setResDragon(1);
        $typeElectrik->setResEau(1);
        $typeElectrik->setResElectrik(0.5);
        $typeElectrik->setResFeu(1);
        $typeElectrik->setResFee(1);
        $typeElectrik->setResGlace(1);
        $typeElectrik->setResInsecte(1);
        $typeElectrik->setResNormal(1);
        $typeElectrik->setResPlante(1);
        $typeElectrik->setResPoison(1);
        $typeElectrik->setResPsy(1);
        $typeElectrik->setResRoche(1);
        $typeElectrik->setResSol(2);
        $typeElectrik->setResSpectre(1);
        $typeElectrik->setResTenebres(1);
        $typeElectrik->setResVol(0.5);
        // add type
        $manager->persist($typeElectrik);


        // type Fee
        $typeFee = new Type();
        $typeFee->setNameType("Fee");
        // multiplicate damage
        $typeFee->setMultDamageToAcier(0.5);
        $typeFee->setMultDamageToCombat(2);
        $typeFee->setMultDamageToDragon(2);
        $typeFee->setMultDamageToEau(1);
        $typeFee->setMultDamageToFeu(0.5);
        $typeFee->setMultDamageToElectrik(1);
        $typeFee->setMultDamageToFee(1);
        $typeFee->setMultDamageToGlace(1);
        $typeFee->setMultDamageToInsecte(1);
        $typeFee->setMultDamageToNormal(1);
        $typeFee->setMultDamageToPlante(1);
        $typeFee->setMultDamageToPoison(0.5);
        $typeFee->setMultDamageToPsy(1);
        $typeFee->setMultDamageToRoche(1);
        $typeFee->setMultDamageToSol(1);
        $typeFee->setMultDamageToSpectre(1);
        $typeFee->setMultDamageToTenebres(2);
        $typeFee->setMultDamageToVol(1);
        // resistance
        $typeFee->setResAcier(2);
        $typeFee->setResCombat(0.5);
        $typeFee->setResDragon(0);
        $typeFee->setResEau(1);
        $typeFee->setResElectrik(1);
        $typeFee->setResFeu(1);
        $typeFee->setResFee(1);
        $typeFee->setResGlace(1);
        $typeFee->setResInsecte(0.5);
        $typeFee->setResNormal(1);
        $typeFee->setResPlante(1);
        $typeFee->setResPoison(2);
        $typeFee->setResPsy(1);
        $typeFee->setResRoche(1);
        $typeFee->setResSol(1);
        $typeFee->setResSpectre(1);
        $typeFee->setResTenebres(0.5);
        $typeFee->setResVol(1);
        // add type
        $manager->persist($typeFee);


        // type Glace
        $typeGlace = new Type();
        $typeGlace->setNameType("Glace");
        // multiplicate damage
        $typeGlace->setMultDamageToAcier(0.5);
        $typeGlace->setMultDamageToCombat(1);
        $typeGlace->setMultDamageToDragon(2);
        $typeGlace->setMultDamageToEau(0.5);
        $typeGlace->setMultDamageToFeu(0.5);
        $typeGlace->setMultDamageToElectrik(1);
        $typeGlace->setMultDamageToFee(1);
        $typeGlace->setMultDamageToGlace(0.5);
        $typeGlace->setMultDamageToInsecte(1);
        $typeGlace->setMultDamageToNormal(1);
        $typeGlace->setMultDamageToPlante(2);
        $typeGlace->setMultDamageToPoison(1);
        $typeGlace->setMultDamageToPsy(1);
        $typeGlace->setMultDamageToRoche(1);
        $typeGlace->setMultDamageToSol(2);
        $typeGlace->setMultDamageToSpectre(1);
        $typeGlace->setMultDamageToTenebres(1);
        $typeGlace->setMultDamageToVol(2);
        // resistance
        $typeGlace->setResAcier(2);
        $typeGlace->setResCombat(2);
        $typeGlace->setResDragon(1);
        $typeGlace->setResEau(1);
        $typeGlace->setResElectrik(1);
        $typeGlace->setResFeu(2);
        $typeGlace->setResFee(1);
        $typeGlace->setResGlace(0.5);
        $typeGlace->setResInsecte(1);
        $typeGlace->setResNormal(1);
        $typeGlace->setResPlante(1);
        $typeGlace->setResPoison(1);
        $typeGlace->setResPsy(1);
        $typeGlace->setResRoche(2);
        $typeGlace->setResSol(1);
        $typeGlace->setResSpectre(1);
        $typeGlace->setResTenebres(1);
        $typeGlace->setResVol(1);
        // add type
        $manager->persist($typeGlace);


        // type insecte
        $typeInsecte = new Type();
        $typeInsecte->setNameType("Insecte");
        // multiplicate damage
        $typeInsecte->setMultDamageToAcier(0.5);
        $typeInsecte->setMultDamageToCombat(0.5);
        $typeInsecte->setMultDamageToDragon(1);
        $typeInsecte->setMultDamageToEau(1);
        $typeInsecte->setMultDamageToFeu(0.5);
        $typeInsecte->setMultDamageToElectrik(1);
        $typeInsecte->setMultDamageToFee(0.5);
        $typeInsecte->setMultDamageToGlace(1);
        $typeInsecte->setMultDamageToInsecte(1);
        $typeInsecte->setMultDamageToNormal(1);
        $typeInsecte->setMultDamageToPlante(2);
        $typeInsecte->setMultDamageToPoison(0.5);
        $typeInsecte->setMultDamageToPsy(2);
        $typeInsecte->setMultDamageToRoche(1);
        $typeInsecte->setMultDamageToSol(1);
        $typeInsecte->setMultDamageToSpectre(0.5);
        $typeInsecte->setMultDamageToTenebres(2);
        $typeInsecte->setMultDamageToVol(0.5);
        // resistance
        $typeInsecte->setResAcier(1);
        $typeInsecte->setResCombat(0.5);
        $typeInsecte->setResDragon(1);
        $typeInsecte->setResEau(1);
        $typeInsecte->setResElectrik(1);
        $typeInsecte->setResFeu(2);
        $typeInsecte->setResFee(1);
        $typeInsecte->setResGlace(1);
        $typeInsecte->setResInsecte(1);
        $typeInsecte->setResNormal(1);
        $typeInsecte->setResPlante(0.5);
        $typeInsecte->setResPoison(1);
        $typeInsecte->setResPsy(1);
        $typeInsecte->setResRoche(2);
        $typeInsecte->setResSol(0.5);
        $typeInsecte->setResSpectre(1);
        $typeInsecte->setResTenebres(1);
        $typeInsecte->setResVol(2);
        // add type
        $manager->persist($typeInsecte);


        // type Normal
        $typeNormal = new Type();
        $typeNormal->setNameType("Normal");
        // multiplicate damage
        $typeNormal->setMultDamageToAcier(0.5);
        $typeNormal->setMultDamageToCombat(1);
        $typeNormal->setMultDamageToDragon(1);
        $typeNormal->setMultDamageToEau(1);
        $typeNormal->setMultDamageToFeu(1);
        $typeNormal->setMultDamageToElectrik(1);
        $typeNormal->setMultDamageToFee(1);
        $typeNormal->setMultDamageToGlace(1);
        $typeNormal->setMultDamageToInsecte(1);
        $typeNormal->setMultDamageToNormal(1);
        $typeNormal->setMultDamageToPlante(1);
        $typeNormal->setMultDamageToPoison(1);
        $typeNormal->setMultDamageToPsy(1);
        $typeNormal->setMultDamageToRoche(0.5);
        $typeNormal->setMultDamageToSol(1);
        $typeNormal->setMultDamageToSpectre(0);
        $typeNormal->setMultDamageToTenebres(1);
        $typeNormal->setMultDamageToVol(1);
        // resistance
        $typeNormal->setResAcier(1);
        $typeNormal->setResCombat(2);
        $typeNormal->setResDragon(1);
        $typeNormal->setResEau(1);
        $typeNormal->setResElectrik(1);
        $typeNormal->setResFeu(1);
        $typeNormal->setResFee(1);
        $typeNormal->setResGlace(1);
        $typeNormal->setResInsecte(1);
        $typeNormal->setResNormal(1);
        $typeNormal->setResPlante(1);
        $typeNormal->setResPoison(1);
        $typeNormal->setResPsy(1);
        $typeNormal->setResRoche(1);
        $typeNormal->setResSol(1);
        $typeNormal->setResSpectre(0);
        $typeNormal->setResTenebres(1);
        $typeNormal->setResVol(1);
        // add type
        $manager->persist($typeNormal);


        // type Plante
        $typePlante = new Type();
        $typePlante->setNameType("Plante");
        // multiplicate damage
        $typePlante->setMultDamageToAcier(0.5);
        $typePlante->setMultDamageToCombat(1);
        $typePlante->setMultDamageToDragon(0.5);
        $typePlante->setMultDamageToEau(2);
        $typePlante->setMultDamageToFeu(0.5);
        $typePlante->setMultDamageToElectrik(1);
        $typePlante->setMultDamageToFee(1);
        $typePlante->setMultDamageToGlace(1);
        $typePlante->setMultDamageToInsecte(0.5);
        $typePlante->setMultDamageToNormal(1);
        $typePlante->setMultDamageToPlante(0.5);
        $typePlante->setMultDamageToPoison(0.5);
        $typePlante->setMultDamageToPsy(1);
        $typePlante->setMultDamageToRoche(2);
        $typePlante->setMultDamageToSol(2);
        $typePlante->setMultDamageToSpectre(1);
        $typePlante->setMultDamageToTenebres(1);
        $typePlante->setMultDamageToVol(0.5);
        // resistance
        $typePlante->setResAcier(1);
        $typePlante->setResCombat(1);
        $typePlante->setResDragon(1);
        $typePlante->setResEau(0.5);
        $typePlante->setResElectrik(0.5);
        $typePlante->setResFeu(2);
        $typePlante->setResFee(1);
        $typePlante->setResGlace(2);
        $typePlante->setResInsecte(2);
        $typePlante->setResNormal(1);
        $typePlante->setResPlante(0.5);
        $typePlante->setResPoison(2);
        $typePlante->setResPsy(1);
        $typePlante->setResRoche(1);
        $typePlante->setResSol(0.5);
        $typePlante->setResSpectre(1);
        $typePlante->setResTenebres(1);
        $typePlante->setResVol(2);
        // add type
        $manager->persist($typePlante);


        // type Poison
        $typePoison = new Type();
        $typePoison->setNameType("Poison");
        // multiplicate damage
        $typePoison->setMultDamageToAcier(0);
        $typePoison->setMultDamageToCombat(1);
        $typePoison->setMultDamageToDragon(1);
        $typePoison->setMultDamageToEau(1);
        $typePoison->setMultDamageToFeu(1);
        $typePoison->setMultDamageToElectrik(1);
        $typePoison->setMultDamageToFee(2);
        $typePoison->setMultDamageToGlace(1);
        $typePoison->setMultDamageToInsecte(1);
        $typePoison->setMultDamageToNormal(1);
        $typePoison->setMultDamageToPlante(2);
        $typePoison->setMultDamageToPoison(0.5);
        $typePoison->setMultDamageToPsy(1);
        $typePoison->setMultDamageToRoche(0.5);
        $typePoison->setMultDamageToSol(0.5);
        $typePoison->setMultDamageToSpectre(0.5);
        $typePoison->setMultDamageToTenebres(1);
        $typePoison->setMultDamageToVol(1);
        // resistance
        $typePoison->setResAcier(1);
        $typePoison->setResCombat(0.5);
        $typePoison->setResDragon(1);
        $typePoison->setResEau(1);
        $typePoison->setResElectrik(1);
        $typePoison->setResFeu(1);
        $typePoison->setResFee(0.5);
        $typePoison->setResGlace(1);
        $typePoison->setResInsecte(0.5);
        $typePoison->setResNormal(1);
        $typePoison->setResPlante(0.5);
        $typePoison->setResPoison(0.5);
        $typePoison->setResPsy(2);
        $typePoison->setResRoche(1);
        $typePoison->setResSol(2);
        $typePoison->setResSpectre(1);
        $typePoison->setResTenebres(1);
        $typePoison->setResVol(1);
        // add type
        $manager->persist($typePoison);


        // type Psy
        $typePsy = new Type();
        $typePsy->setNameType("Psy");
        // multiplicate damage
        $typePsy->setMultDamageToAcier(0.5);
        $typePsy->setMultDamageToCombat(2);
        $typePsy->setMultDamageToDragon(1);
        $typePsy->setMultDamageToEau(1);
        $typePsy->setMultDamageToFeu(1);
        $typePsy->setMultDamageToElectrik(1);
        $typePsy->setMultDamageToFee(1);
        $typePsy->setMultDamageToGlace(1);
        $typePsy->setMultDamageToInsecte(1);
        $typePsy->setMultDamageToNormal(1);
        $typePsy->setMultDamageToPlante(1);
        $typePsy->setMultDamageToPoison(2);
        $typePsy->setMultDamageToPsy(0.5);
        $typePsy->setMultDamageToRoche(1);
        $typePsy->setMultDamageToSol(1);
        $typePsy->setMultDamageToSpectre(1);
        $typePsy->setMultDamageToTenebres(0);
        $typePsy->setMultDamageToVol(1);
        // resistance
        $typePsy->setResAcier(1);
        $typePsy->setResCombat(0.5);
        $typePsy->setResDragon(1);
        $typePsy->setResEau(1);
        $typePsy->setResElectrik(1);
        $typePsy->setResFeu(1);
        $typePsy->setResFee(1);
        $typePsy->setResGlace(1);
        $typePsy->setResInsecte(2);
        $typePsy->setResNormal(1);
        $typePsy->setResPlante(1);
        $typePsy->setResPoison(1);
        $typePsy->setResPsy(0.5);
        $typePsy->setResRoche(1);
        $typePsy->setResSol(1);
        $typePsy->setResSpectre(2);
        $typePsy->setResTenebres(2);
        $typePsy->setResVol(1);
        // add type
        $manager->persist($typePsy);


        // type Roche
        $typeRoche = new Type();
        $typeRoche->setNameType("Roche");
        // multiplicate damage
        $typeRoche->setMultDamageToAcier(0.5);
        $typeRoche->setMultDamageToCombat(0.5);
        $typeRoche->setMultDamageToDragon(1);
        $typeRoche->setMultDamageToEau(1);
        $typeRoche->setMultDamageToFeu(2);
        $typeRoche->setMultDamageToElectrik(1);
        $typeRoche->setMultDamageToFee(1);
        $typeRoche->setMultDamageToGlace(2);
        $typeRoche->setMultDamageToInsecte(2);
        $typeRoche->setMultDamageToNormal(1);
        $typeRoche->setMultDamageToPlante(1);
        $typeRoche->setMultDamageToPoison(1);
        $typeRoche->setMultDamageToPsy(1);
        $typeRoche->setMultDamageToRoche(1);
        $typeRoche->setMultDamageToSol(0.5);
        $typeRoche->setMultDamageToSpectre(1);
        $typeRoche->setMultDamageToTenebres(1);
        $typeRoche->setMultDamageToVol(2);
        // resistance
        $typeRoche->setResAcier(2);
        $typeRoche->setResCombat(2);
        $typeRoche->setResDragon(1);
        $typeRoche->setResEau(2);
        $typeRoche->setResElectrik(1);
        $typeRoche->setResFeu(0.5);
        $typeRoche->setResFee(1);
        $typeRoche->setResGlace(1);
        $typeRoche->setResInsecte(1);
        $typeRoche->setResNormal(0.5);
        $typeRoche->setResPlante(2);
        $typeRoche->setResPoison(0.5);
        $typeRoche->setResPsy(1);
        $typeRoche->setResRoche(1);
        $typeRoche->setResSol(2);
        $typeRoche->setResSpectre(1);
        $typeRoche->setResTenebres(1);
        $typeRoche->setResVol(0.5);
        // add type
        $manager->persist($typeRoche);


        // type Sol
        $typeSol = new Type();
        $typeSol->setNameType("Sol");
        // multiplicate damage
        $typeSol->setMultDamageToAcier(2);
        $typeSol->setMultDamageToCombat(1);
        $typeSol->setMultDamageToDragon(1);
        $typeSol->setMultDamageToEau(1);
        $typeSol->setMultDamageToFeu(2);
        $typeSol->setMultDamageToElectrik(2);
        $typeSol->setMultDamageToFee(1);
        $typeSol->setMultDamageToGlace(1);
        $typeSol->setMultDamageToInsecte(0.5);
        $typeSol->setMultDamageToNormal(1);
        $typeSol->setMultDamageToPlante(0.5);
        $typeSol->setMultDamageToPoison(2);
        $typeSol->setMultDamageToPsy(1);
        $typeSol->setMultDamageToRoche(2);
        $typeSol->setMultDamageToSol(1);
        $typeSol->setMultDamageToSpectre(1);
        $typeSol->setMultDamageToTenebres(1);
        $typeSol->setMultDamageToVol(0);
        // resistance
        $typeSol->setResAcier(1);
        $typeSol->setResCombat(1);
        $typeSol->setResDragon(1);
        $typeSol->setResEau(2);
        $typeSol->setResElectrik(0);
        $typeSol->setResFeu(1);
        $typeSol->setResFee(1);
        $typeSol->setResGlace(2);
        $typeSol->setResInsecte(1);
        $typeSol->setResNormal(1);
        $typeSol->setResPlante(2);
        $typeSol->setResPoison(0.5);
        $typeSol->setResPsy(1);
        $typeSol->setResRoche(0.5);
        $typeSol->setResSol(1);
        $typeSol->setResSpectre(1);
        $typeSol->setResTenebres(1);
        $typeSol->setResVol(1);
        // add type
        $manager->persist($typeSol);


        // type Spectre
        $typeSpectre = new Type();
        $typeSpectre->setNameType("Spectre");
        // multiplicate damage
        $typeSpectre->setMultDamageToAcier(1);
        $typeSpectre->setMultDamageToCombat(1);
        $typeSpectre->setMultDamageToDragon(1);
        $typeSpectre->setMultDamageToEau(1);
        $typeSpectre->setMultDamageToFeu(1);
        $typeSpectre->setMultDamageToElectrik(1);
        $typeSpectre->setMultDamageToFee(1);
        $typeSpectre->setMultDamageToGlace(1);
        $typeSpectre->setMultDamageToInsecte(1);
        $typeSpectre->setMultDamageToNormal(0);
        $typeSpectre->setMultDamageToPlante(1);
        $typeSpectre->setMultDamageToPoison(1);
        $typeSpectre->setMultDamageToPsy(2);
        $typeSpectre->setMultDamageToRoche(1);
        $typeSpectre->setMultDamageToSol(1);
        $typeSpectre->setMultDamageToSpectre(2);
        $typeSpectre->setMultDamageToTenebres(0.5);
        $typeSpectre->setMultDamageToVol(1);
        // resistance
        $typeSpectre->setResAcier(1);
        $typeSpectre->setResCombat(0);
        $typeSpectre->setResDragon(1);
        $typeSpectre->setResEau(1);
        $typeSpectre->setResElectrik(1);
        $typeSpectre->setResFeu(1);
        $typeSpectre->setResFee(1);
        $typeSpectre->setResGlace(1);
        $typeSpectre->setResInsecte(0.5);
        $typeSpectre->setResNormal(0);
        $typeSpectre->setResPlante(1);
        $typeSpectre->setResPoison(0.5);
        $typeSpectre->setResPsy(1);
        $typeSpectre->setResRoche(1);
        $typeSpectre->setResSol(1);
        $typeSpectre->setResSpectre(2);
        $typeSpectre->setResTenebres(2);
        $typeSpectre->setResVol(1);
        // add type
        $manager->persist($typeSpectre);


        // type Tenebres
        $typeTenebres = new Type();
        $typeTenebres->setNameType("Tenebres");
        // multiplicate damage
        $typeTenebres->setMultDamageToAcier(1);
        $typeTenebres->setMultDamageToCombat(0.5);
        $typeTenebres->setMultDamageToDragon(1);
        $typeTenebres->setMultDamageToEau(1);
        $typeTenebres->setMultDamageToFeu(1);
        $typeTenebres->setMultDamageToElectrik(1);
        $typeTenebres->setMultDamageToFee(0.5);
        $typeTenebres->setMultDamageToGlace(1);
        $typeTenebres->setMultDamageToInsecte(1);
        $typeTenebres->setMultDamageToNormal(1);
        $typeTenebres->setMultDamageToPlante(1);
        $typeTenebres->setMultDamageToPoison(1);
        $typeTenebres->setMultDamageToPsy(2);
        $typeTenebres->setMultDamageToRoche(1);
        $typeTenebres->setMultDamageToSol(1);
        $typeTenebres->setMultDamageToSpectre(2);
        $typeTenebres->setMultDamageToTenebres(0.5);
        $typeTenebres->setMultDamageToVol(1);
        // resistance
        $typeTenebres->setResAcier(1);
        $typeTenebres->setResCombat(2);
        $typeTenebres->setResDragon(1);
        $typeTenebres->setResEau(1);
        $typeTenebres->setResElectrik(1);
        $typeTenebres->setResFeu(1);
        $typeTenebres->setResFee(2);
        $typeTenebres->setResGlace(1);
        $typeTenebres->setResInsecte(2);
        $typeTenebres->setResNormal(1);
        $typeTenebres->setResPlante(1);
        $typeTenebres->setResPoison(1);
        $typeTenebres->setResPsy(0);
        $typeTenebres->setResRoche(1);
        $typeTenebres->setResSol(1);
        $typeTenebres->setResSpectre(0.5);
        $typeTenebres->setResTenebres(0.5);
        $typeTenebres->setResVol(1);
        // add type
        $manager->persist($typeTenebres);


        // Type Vol
        $typeVol = new Type();
        $typeVol->setNameType("Vol");
        // multiplicate damage
        $typeVol->setMultDamageToAcier(0.5);
        $typeVol->setMultDamageToCombat(2);
        $typeVol->setMultDamageToDragon(1);
        $typeVol->setMultDamageToEau(1);
        $typeVol->setMultDamageToFeu(1);
        $typeVol->setMultDamageToElectrik(0.5);
        $typeVol->setMultDamageToFee(1);
        $typeVol->setMultDamageToGlace(1);
        $typeVol->setMultDamageToInsecte(2);
        $typeVol->setMultDamageToNormal(1);
        $typeVol->setMultDamageToPlante(2);
        $typeVol->setMultDamageToPoison(1);
        $typeVol->setMultDamageToPsy(1);
        $typeVol->setMultDamageToRoche(0.5);
        $typeVol->setMultDamageToSol(1);
        $typeVol->setMultDamageToSpectre(1);
        $typeVol->setMultDamageToTenebres(1);
        $typeVol->setMultDamageToVol(1);
        // resistance
        $typeVol->setResAcier(1);
        $typeVol->setResCombat(0.5);
        $typeVol->setResDragon(1);
        $typeVol->setResEau(1);
        $typeVol->setResElectrik(2);
        $typeVol->setResFeu(1);
        $typeVol->setResFee(1);
        $typeVol->setResGlace(2);
        $typeVol->setResInsecte(0.5);
        $typeVol->setResNormal(1);
        $typeVol->setResPlante(0.5);
        $typeVol->setResPoison(1);
        $typeVol->setResPsy(1);
        $typeVol->setResRoche(2);
        $typeVol->setResSol(0);
        $typeVol->setResSpectre(1);
        $typeVol->setResTenebres(1);
        $typeVol->setResVol(1);
        // add type
        $manager->persist($typeVol);

        
        // envoie les données vers database
        $manager->flush();
    }
}
