<?php

namespace App\Entity;

use App\Repository\TypeRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TypeRepository::class)]
class Type
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 30)]
    private ?string $nameType = null;

    #[ORM\Column]
    private ?float $multDamageToAcier = null;

    #[ORM\Column]
    private ?float $multDamageToCombat = null;

    #[ORM\Column]
    private ?float $multDamageToDragon = null;

    #[ORM\Column]
    private ?float $multDamageToEau = null;

    #[ORM\Column]
    private ?float $multDamageToFeu = null;

    #[ORM\Column]
    private ?float $multDamageToElectrik = null;

    #[ORM\Column]
    private ?float $multDamageToFee = null;

    #[ORM\Column]
    private ?float $multDamageToGlace = null;

    #[ORM\Column]
    private ?float $multDamageToInsecte = null;

    #[ORM\Column]
    private ?float $multDamageToNormal = null;

    #[ORM\Column]
    private ?float $multDamageToPlante = null;

    #[ORM\Column]
    private ?float $multDamageToPoison = null;

    #[ORM\Column]
    private ?float $multDamageToPsy = null;

    #[ORM\Column]
    private ?float $multDamageToRoche = null;

    #[ORM\Column]
    private ?float $multDamageToSol = null;

    #[ORM\Column]
    private ?float $multDamageToSpectre = null;

    #[ORM\Column]
    private ?float $multDamageToTenebres = null;

    #[ORM\Column]
    private ?float $multDamageToVol = null;

    #[ORM\Column]
    private ?float $resAcier = null;

    #[ORM\Column]
    private ?float $resCombat = null;

    #[ORM\Column]
    private ?float $resDragon = null;

    #[ORM\Column]
    private ?float $resEau = null;

    #[ORM\Column]
    private ?float $resFeu = null;

    #[ORM\Column]
    private ?float $resElectrik = null;

    #[ORM\Column]
    private ?float $resFee = null;

    #[ORM\Column]
    private ?float $resGlace = null;

    #[ORM\Column]
    private ?float $resInsecte = null;

    #[ORM\Column]
    private ?float $resNormal = null;

    #[ORM\Column]
    private ?float $resPlante = null;

    #[ORM\Column]
    private ?float $resPoison = null;

    #[ORM\Column]
    private ?float $resPsy = null;

    #[ORM\Column]
    private ?float $resRoche = null;

    #[ORM\Column]
    private ?float $resSol = null;

    #[ORM\Column]
    private ?float $resSpectre = null;

    #[ORM\Column]
    private ?float $resTenebres = null;

    #[ORM\Column]
    private ?float $resVol = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMultDamageToAcier(): ?float
    {
        return $this->multDamageToAcier;
    }

    public function setMultDamageToAcier(float $multDamageToAcier): static
    {
        $this->multDamageToAcier = $multDamageToAcier;

        return $this;
    }

    public function getMultDamageToDragon(): ?float
    {
        return $this->multDamageToDragon;
    }

    public function setMultDamageToDragon(float $multDamageToDragon): static
    {
        $this->multDamageToDragon = $multDamageToDragon;

        return $this;
    }

    public function getMultDamageToCombat(): ?float
    {
        return $this->multDamageToCombat;
    }

    public function setMultDamageToCombat(float $multDamageToCombat): static
    {
        $this->multDamageToCombat = $multDamageToCombat;

        return $this;
    }

    public function getMultDamageToEau(): ?float
    {
        return $this->multDamageToEau;
    }

    public function setMultDamageToEau(float $multDamageToEau): static
    {
        $this->multDamageToEau = $multDamageToEau;

        return $this;
    }

    public function getMultDamageToFeu(): ?float
    {
        return $this->multDamageToFeu;
    }

    public function setMultDamageToFeu(float $multDamageToFeu): static
    {
        $this->multDamageToFeu = $multDamageToFeu;

        return $this;
    }

    public function getMultDamageToElectrik(): ?float
    {
        return $this->multDamageToElectrik;
    }

    public function setMultDamageToElectrik(float $multDamageToElectrik): static
    {
        $this->multDamageToElectrik = $multDamageToElectrik;

        return $this;
    }

    public function getMultDamageToFee(): ?float
    {
        return $this->multDamageToFee;
    }

    public function setMultDamageToFee(float $multDamageToFee): static
    {
        $this->multDamageToFee = $multDamageToFee;

        return $this;
    }

    public function getMultDamageToGlace(): ?float
    {
        return $this->multDamageToGlace;
    }

    public function setMultDamageToGlace(float $multDamageToGlace): static
    {
        $this->multDamageToGlace = $multDamageToGlace;

        return $this;
    }

    public function getMultDamageToInsecte(): ?float
    {
        return $this->multDamageToInsecte;
    }

    public function setMultDamageToInsecte(float $multDamageToInsecte): static
    {
        $this->multDamageToInsecte = $multDamageToInsecte;

        return $this;
    }

    public function getMultDamageToNormal(): ?float
    {
        return $this->multDamageToNormal;
    }

    public function setMultDamageToNormal(float $multDamageToNormal): static
    {
        $this->multDamageToNormal = $multDamageToNormal;

        return $this;
    }

    public function getMultDamageToPlante(): ?float
    {
        return $this->multDamageToPlante;
    }

    public function setMultDamageToPlante(float $multDamageToPlante): static
    {
        $this->multDamageToPlante = $multDamageToPlante;

        return $this;
    }

    public function getMultDamageToPoison(): ?float
    {
        return $this->multDamageToPoison;
    }

    public function setMultDamageToPoison(float $multDamageToPoison): static
    {
        $this->multDamageToPoison = $multDamageToPoison;

        return $this;
    }

    public function getMultDamageToPsy(): ?float
    {
        return $this->multDamageToPsy;
    }

    public function setMultDamageToPsy(float $multDamageToPsy): static
    {
        $this->multDamageToPsy = $multDamageToPsy;

        return $this;
    }

    public function getMultDamageToRoche(): ?float
    {
        return $this->multDamageToRoche;
    }

    public function setMultDamageToRoche(float $multDamageToRoche): static
    {
        $this->multDamageToRoche = $multDamageToRoche;

        return $this;
    }

    public function getMultDamageToSol(): ?float
    {
        return $this->multDamageToSol;
    }

    public function setMultDamageToSol(float $multDamageToSol): static
    {
        $this->multDamageToSol = $multDamageToSol;

        return $this;
    }

    public function getMultDamageToSpectre(): ?float
    {
        return $this->multDamageToSpectre;
    }

    public function setMultDamageToSpectre(float $multDamageToSpectre): static
    {
        $this->multDamageToSpectre = $multDamageToSpectre;

        return $this;
    }

    public function getMultDamageToTenebres(): ?float
    {
        return $this->multDamageToTenebres;
    }

    public function setMultDamageToTenebres(float $multDamageToTenebres): static
    {
        $this->multDamageToTenebres = $multDamageToTenebres;

        return $this;
    }

    public function getMultDamageToVol(): ?float
    {
        return $this->multDamageToVol;
    }

    public function setMultDamageToVol(float $multDamageToVol): static
    {
        $this->multDamageToVol = $multDamageToVol;

        return $this;
    }

    public function getNameType(): ?string
    {
        return $this->nameType;
    }

    public function setNameType(string $nameType): static
    {
        $this->nameType = $nameType;

        return $this;
    }

    public function getResAcier(): ?float
    {
        return $this->resAcier;
    }

    public function setResAcier(float $resAcier): static
    {
        $this->resAcier = $resAcier;

        return $this;
    }

    public function getResCombat(): ?float
    {
        return $this->resCombat;
    }

    public function setResCombat(float $resCombat): static
    {
        $this->resCombat = $resCombat;

        return $this;
    }

    public function getResDragon(): ?float
    {
        return $this->resDragon;
    }

    public function setResDragon(float $resDragon): static
    {
        $this->resDragon = $resDragon;

        return $this;
    }

    public function getResEau(): ?float
    {
        return $this->resEau;
    }

    public function setResEau(float $resEau): static
    {
        $this->resEau = $resEau;

        return $this;
    }

    public function getResFeu(): ?float
    {
        return $this->resFeu;
    }

    public function setResFeu(float $resFeu): static
    {
        $this->resFeu = $resFeu;

        return $this;
    }

    public function getResElectrik(): ?float
    {
        return $this->resElectrik;
    }

    public function setResElectrik(float $resElectrik): static
    {
        $this->resElectrik = $resElectrik;

        return $this;
    }

    public function getResFee(): ?float
    {
        return $this->resFee;
    }

    public function setResFee(float $resFee): static
    {
        $this->resFee = $resFee;

        return $this;
    }

    public function getResGlace(): ?float
    {
        return $this->resGlace;
    }

    public function setResGlace(float $resGlace): static
    {
        $this->resGlace = $resGlace;

        return $this;
    }

    public function getResInsecte(): ?float
    {
        return $this->resInsecte;
    }

    public function setResInsecte(float $resInsecte): static
    {
        $this->resInsecte = $resInsecte;

        return $this;
    }

    public function getResNormal(): ?float
    {
        return $this->resNormal;
    }

    public function setResNormal(float $resNormal): static
    {
        $this->resNormal = $resNormal;

        return $this;
    }

    public function getResPlante(): ?float
    {
        return $this->resPlante;
    }

    public function setResPlante(float $resPlante): static
    {
        $this->resPlante = $resPlante;

        return $this;
    }

    public function getResPoison(): ?float
    {
        return $this->resPoison;
    }

    public function setResPoison(float $resPoison): static
    {
        $this->resPoison = $resPoison;

        return $this;
    }

    public function getResPsy(): ?float
    {
        return $this->resPsy;
    }

    public function setResPsy(float $resPsy): static
    {
        $this->resPsy = $resPsy;

        return $this;
    }

    public function getResRoche(): ?float
    {
        return $this->resRoche;
    }

    public function setResRoche(float $resRoche): static
    {
        $this->resRoche = $resRoche;

        return $this;
    }

    public function getResSol(): ?float
    {
        return $this->resSol;
    }

    public function setResSol(float $resSol): static
    {
        $this->resSol = $resSol;

        return $this;
    }

    public function getResSpectre(): ?float
    {
        return $this->resSpectre;
    }

    public function setResSpectre(float $resSpectre): static
    {
        $this->resSpectre = $resSpectre;

        return $this;
    }

    public function getResTenebres(): ?float
    {
        return $this->resTenebres;
    }

    public function setResTenebres(float $resTenebres): static
    {
        $this->resTenebres = $resTenebres;

        return $this;
    }

    public function getResVol(): ?float
    {
        return $this->resVol;
    }

    public function setResVol(float $resVol): static
    {
        $this->resVol = $resVol;

        return $this;
    }
}
