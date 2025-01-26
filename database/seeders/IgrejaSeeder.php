<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IgrejaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $igrejas = [
            [
                "nome" => "Alagoinhas",
                "bloco_id" => 1,
                "regiao_id" => 1,
            ],
            [
                "nome" => "Aracas",
                "bloco_id" => 1,
                "regiao_id" => 1,
            ],
            [
                "nome" => "Barreiro",
                "bloco_id" => 1,
                "regiao_id" => 1,
            ],
            [
                "nome" => "Inhambupe",
                "bloco_id" => 1,
                "regiao_id" => 1,
            ],
            [
                "nome" => "Núcleo-Itapicuru",
                "bloco_id" => 1,
                "regiao_id" => 1,
            ],
            [
                "nome" => "TrabEspecial-LagoaZonaRural",
                "bloco_id" => 1,
                "regiao_id" => 1,
            ],
            [
                "nome" => "MiguelVelho",
                "bloco_id" => 1,
                "regiao_id" => 1,
            ],
            [
                "nome" => "Olindina",
                "bloco_id" => 1,
                "regiao_id" => 1,
            ],
            [
                "nome" => "Petrolar",
                "bloco_id" => 1,
                "regiao_id" => 1,
            ],
            [
                "nome" => "CATU",
                "bloco_id" => 1,
                "regiao_id" => 2,
            ],
            [
                "nome" => "CatuII",
                "bloco_id" => 1,
                "regiao_id" => 2,
            ],
            [
                "nome" => "CatuIII",
                "bloco_id" => 1,
                "regiao_id" => 2,
            ],
            [
                "nome" => "TrabEspecial-Pedras",
                "bloco_id" => 1,
                "regiao_id" => 2,
            ],
            [
                "nome" => "ENTRERIOS",
                "bloco_id" => 1,
                "regiao_id" => 3,
            ],
            [
                "nome" => "Núcleo-CardealdaSilva",
                "bloco_id" => 1,
                "regiao_id" => 3,
            ],
            [
                "nome" => "Núcleo-RamosMachado",
                "bloco_id" => 1,
                "regiao_id" => 3,
            ],
            [
                "nome" => "ESPLANADA",
                "bloco_id" => 1,
                "regiao_id" => 4,
            ],
            [
                "nome" => "Acajutiba",
                "bloco_id" => 1,
                "regiao_id" => 4,
            ],
            [
                "nome" => "Conde",
                "bloco_id" => 1,
                "regiao_id" => 4,
            ],
            [
                "nome" => "Crisopolis",
                "bloco_id" => 1,
                "regiao_id" => 4,
            ],
            [
                "nome" => "TrabEspecial-Jandaira",
                "bloco_id" => 1,
                "regiao_id" => 4,
            ],
            [
                "nome" => "Núcleo-Palame",
                "bloco_id" => 1,
                "regiao_id" => 4,
            ],
            [
                "nome" => "RioReal",
                "bloco_id" => 1,
                "regiao_id" => 4,
            ],
            [
                "nome" => "TrabEspecial-SitioCrisopolis",
                "bloco_id" => 1,
                "regiao_id" => 4,
            ],
            [
                "nome" => "Núcleo-ViladoConde",
                "bloco_id" => 1,
                "regiao_id" => 4,
            ],
            [
                "nome" => "RIBEIRADOPOMBAL",
                "bloco_id" => 1,
                "regiao_id" => 5,
            ],
            [
                "nome" => "Núcleo-Banzae",
                "bloco_id" => 1,
                "regiao_id" => 5,
            ],
            [
                "nome" => "CiceroDantas",
                "bloco_id" => 1,
                "regiao_id" => 5,
            ],
            [
                "nome" => "Cipo",
                "bloco_id" => 1,
                "regiao_id" => 5,
            ],
            [
                "nome" => "Núcleo-NovaSoure",
                "bloco_id" => 1,
                "regiao_id" => 5,
            ],
            [
                "nome" => "Núcleo-SitiodoQuinto",
                "bloco_id" => 1,
                "regiao_id" => 5,
            ],
            [
                "nome" => "SANTATEREZINHA",
                "bloco_id" => 1,
                "regiao_id" => 6,
            ],
            [
                "nome" => "Núcleo-Aramari",
                "bloco_id" => 1,
                "regiao_id" => 6,
            ],
            [
                "nome" => "Núcleo-Freileao",
                "bloco_id" => 1,
                "regiao_id" => 6,
            ],
            [
                "nome" => "Núcleo-SatiroDias",
                "bloco_id" => 1,
                "regiao_id" => 6,
            ],
            [
                "nome" => "Barreiras",
                "bloco_id" => 2,
                "regiao_id" => 7,
            ],
            [
                "nome" => "Bandeirantes",
                "bloco_id" => 2,
                "regiao_id" => 7,
            ],
            [
                "nome" => "BarreirasIII",
                "bloco_id" => 2,
                "regiao_id" => 7,
            ],
            [
                "nome" => "Barreirinhas",
                "bloco_id" => 2,
                "regiao_id" => 7,
            ],
            [
                "nome" => "Núcleo-Cotegipe",
                "bloco_id" => 2,
                "regiao_id" => 7,
            ],
            [
                "nome" => "Núcleo-RiachodasNeves",
                "bloco_id" => 2,
                "regiao_id" => 7,
            ],
            [
                "nome" => "SantaRitadeCassia",
                "bloco_id" => 2,
                "regiao_id" => 7,
            ],
            [
                "nome" => "VilaBrasil",
                "bloco_id" => 2,
                "regiao_id" => 7,
            ],
            [
                "nome" => "BarreirasII",
                "bloco_id" => 2,
                "regiao_id" => 8,
            ],
            [
                "nome" => "Formosa",
                "bloco_id" => 2,
                "regiao_id" => 8,
            ],
            [
                "nome" => "BomJesusdaLapa",
                "bloco_id" => 2,
                "regiao_id" => 9,
            ],
            [
                "nome" => "Cocos",
                "bloco_id" => 2,
                "regiao_id" => 9,
            ],
            [
                "nome" => "Correntina",
                "bloco_id" => 2,
                "regiao_id" => 9,
            ],
            [
                "nome" => "Núcleo-RiachodeSantana",
                "bloco_id" => 2,
                "regiao_id" => 9,
            ],
            [
                "nome" => "SantaMariadaVitoria",
                "bloco_id" => 2,
                "regiao_id" => 9,
            ],
            [
                "nome" => "Núcleo-Santana",
                "bloco_id" => 2,
                "regiao_id" => 9,
            ],
            [
                "nome" => "Núcleo-SerradoRamalho",
                "bloco_id" => 2,
                "regiao_id" => 9,
            ],
            [
                "nome" => "SerraDourado",
                "bloco_id" => 2,
                "regiao_id" => 9,
            ],
            [
                "nome" => "Nucleo-SitiodoMato",
                "bloco_id" => 2,
                "regiao_id" => 9,
            ],
            [
                "nome" => "Ibotirama",
                "bloco_id" => 2,
                "regiao_id" => 10,
            ],
            [
                "nome" => "Paratinga",
                "bloco_id" => 2,
                "regiao_id" => 10,
            ],
            [
                "nome" => "LuisEduardo",
                "bloco_id" => 2,
                "regiao_id" => 11,
            ],
            [
                "nome" => "Acacias",
                "bloco_id" => 2,
                "regiao_id" => 11,
            ],
            [
                "nome" => "Mimoso",
                "bloco_id" => 2,
                "regiao_id" => 11,
            ],
            [
                "nome" => "Camaçari",
                "bloco_id" => 3,
                "regiao_id" => 12,
            ],
            [
                "nome" => "Núcleo-PitangadePalmares",
                "bloco_id" => 3,
                "regiao_id" => 12,
            ],
            [
                "nome" => "BarradaPojuca",
                "bloco_id" => 3,
                "regiao_id" => 13,
            ],
            [
                "nome" => "Imbassai",
                "bloco_id" => 3,
                "regiao_id" => 13,
            ],
            [
                "nome" => "Malhadas",
                "bloco_id" => 3,
                "regiao_id" => 13,
            ],
            [
                "nome" => "PortodoSauipe",
                "bloco_id" => 3,
                "regiao_id" => 13,
            ],
            [
                "nome" => "PraiadoForte",
                "bloco_id" => 3,
                "regiao_id" => 13,
            ],
            [
                "nome" => "DiasD´Avila",
                "bloco_id" => 3,
                "regiao_id" => 14,
            ],
            [
                "nome" => "Núcleo-AmadoBahia",
                "bloco_id" => 3,
                "regiao_id" => 14,
            ],
            [
                "nome" => "Biribeira",
                "bloco_id" => 3,
                "regiao_id" => 14,
            ],
            [
                "nome" => "DiasDavilaII",
                "bloco_id" => 3,
                "regiao_id" => 14,
            ],
            [
                "nome" => "DiasDavilaIII",
                "bloco_id" => 3,
                "regiao_id" => 14,
            ],
            [
                "nome" => "Núcleo-Itapecirica",
                "bloco_id" => 3,
                "regiao_id" => 14,
            ],
            [
                "nome" => "MatadeSãoJoão",
                "bloco_id" => 3,
                "regiao_id" => 14,
            ],
            [
                "nome" => "LamaPreta",
                "bloco_id" => 3,
                "regiao_id" => 15,
            ],
            [
                "nome" => "Cascalheira",
                "bloco_id" => 3,
                "regiao_id" => 15,
            ],
            [
                "nome" => "Parafuso",
                "bloco_id" => 3,
                "regiao_id" => 15,
            ],
            [
                "nome" => "MonteGordo",
                "bloco_id" => 3,
                "regiao_id" => 16,
            ],
            [
                "nome" => "BarradoJacuipe",
                "bloco_id" => 3,
                "regiao_id" => 16,
            ],
            [
                "nome" => "Phoc",
                "bloco_id" => 3,
                "regiao_id" => 17,
            ],
            [
                "nome" => "GlebaE",
                "bloco_id" => 3,
                "regiao_id" => 17,
            ],
            [
                "nome" => "VerdeHorizonte",
                "bloco_id" => 3,
                "regiao_id" => 17,
            ],
            [
                "nome" => "Pojuca",
                "bloco_id" => 3,
                "regiao_id" => 18,
            ],
            [
                "nome" => "LosAngeles",
                "bloco_id" => 3,
                "regiao_id" => 18,
            ],
            [
                "nome" => "CaminhodeAreia",
                "bloco_id" => 4,
                "regiao_id" => 19,
            ],
            [
                "nome" => "BoaViagem",
                "bloco_id" => 4,
                "regiao_id" => 19,
            ],
            [
                "nome" => "AltodeCoutos",
                "bloco_id" => 4,
                "regiao_id" => 20,
            ],
            [
                "nome" => "AltodeCoutosII",
                "bloco_id" => 4,
                "regiao_id" => 20,
            ],
            [
                "nome" => "Constituinte",
                "bloco_id" => 4,
                "regiao_id" => 20,
            ],
            [
                "nome" => "FazendaCoutos",
                "bloco_id" => 4,
                "regiao_id" => 21,
            ],
            [
                "nome" => "Casinhas",
                "bloco_id" => 4,
                "regiao_id" => 21,
            ],
            [
                "nome" => "Coutos",
                "bloco_id" => 4,
                "regiao_id" => 21,
            ],
            [
                "nome" => "VistaAlegre",
                "bloco_id" => 4,
                "regiao_id" => 21,
            ],
            [
                "nome" => "IlhaAmerela",
                "bloco_id" => 4,
                "regiao_id" => 22,
            ],
            [
                "nome" => "RioSena",
                "bloco_id" => 4,
                "regiao_id" => 22,
            ],
            [
                "nome" => "Lobato",
                "bloco_id" => 4,
                "regiao_id" => 23,
            ],
            [
                "nome" => "AltodoCabrito",
                "bloco_id" => 4,
                "regiao_id" => 23,
            ],
            [
                "nome" => "AltodoCabritoII",
                "bloco_id" => 4,
                "regiao_id" => 23,
            ],
            [
                "nome" => "MirantedePeriperi",
                "bloco_id" => 4,
                "regiao_id" => 24,
            ],
            [
                "nome" => "Paripe",
                "bloco_id" => 4,
                "regiao_id" => 25,
            ],
            [
                "nome" => "Núcleo-IlhadeSantana",
                "bloco_id" => 4,
                "regiao_id" => 25,
            ],
            [
                "nome" => "IlhadeSãoJoão",
                "bloco_id" => 4,
                "regiao_id" => 25,
            ],
            [
                "nome" => "ParipeII",
                "bloco_id" => 4,
                "regiao_id" => 26,
            ],
            [
                "nome" => "ParipeIII",
                "bloco_id" => 4,
                "regiao_id" => 26,
            ],
            [
                "nome" => "SãoTome",
                "bloco_id" => 4,
                "regiao_id" => 26,
            ],
            [
                "nome" => "Plataforma",
                "bloco_id" => 4,
                "regiao_id" => 27,
            ],
            [
                "nome" => "Itacaranha",
                "bloco_id" => 4,
                "regiao_id" => 27,
            ],
            [
                "nome" => "VoltadoTanque",
                "bloco_id" => 4,
                "regiao_id" => 27,
            ],
            [
                "nome" => "SantaLuzia",
                "bloco_id" => 4,
                "regiao_id" => 28,
            ],
            [
                "nome" => "Uruguai",
                "bloco_id" => 4,
                "regiao_id" => 29,
            ],
            [
                "nome" => "CajazeirasX",
                "bloco_id" => 5,
                "regiao_id" => 30,
            ],
            [
                "nome" => "BocadaMata",
                "bloco_id" => 5,
                "regiao_id" => 30,
            ],
            [
                "nome" => "CajazeirasVIII",
                "bloco_id" => 5,
                "regiao_id" => 30,
            ],
            [
                "nome" => "CajazeirasV",
                "bloco_id" => 5,
                "regiao_id" => 30,
            ],
            [
                "nome" => "CajazeirasXI",
                "bloco_id" => 5,
                "regiao_id" => 30,
            ],
            [
                "nome" => "MirantedeCajazeirasXI",
                "bloco_id" => 5,
                "regiao_id" => 30,
            ],
            [
                "nome" => "AguasClaras",
                "bloco_id" => 5,
                "regiao_id" => 31,
            ],
            [
                "nome" => "Núcleo-AguasClarasII",
                "bloco_id" => 5,
                "regiao_id" => 31,
            ],
            [
                "nome" => "CajazeirasVI",
                "bloco_id" => 5,
                "regiao_id" => 32,
            ],
            [
                "nome" => "CaixaDagua",
                "bloco_id" => 5,
                "regiao_id" => 32,
            ],
            [
                "nome" => "CasteloBranco",
                "bloco_id" => 5,
                "regiao_id" => 33,
            ],
            [
                "nome" => "Creche",
                "bloco_id" => 5,
                "regiao_id" => 33,
            ],
            [
                "nome" => "DomAvelarI",
                "bloco_id" => 5,
                "regiao_id" => 33,
            ],
            [
                "nome" => "VilaCanaria",
                "bloco_id" => 5,
                "regiao_id" => 33,
            ],
            [
                "nome" => "CasteloBrancoII",
                "bloco_id" => 5,
                "regiao_id" => 34,
            ],
            [
                "nome" => "Mussurunga",
                "bloco_id" => 5,
                "regiao_id" => 35,
            ],
            [
                "nome" => "SetorF",
                "bloco_id" => 5,
                "regiao_id" => 35,
            ],
            [
                "nome" => "VilaVerde",
                "bloco_id" => 5,
                "regiao_id" => 35,
            ],
            [
                "nome" => "NovaBrasilia",
                "bloco_id" => 5,
                "regiao_id" => 36,
            ],
            [
                "nome" => "Valeria",
                "bloco_id" => 5,
                "regiao_id" => 37,
            ],
            [
                "nome" => "Derba",
                "bloco_id" => 5,
                "regiao_id" => 37,
            ],
            [
                "nome" => "Palestina",
                "bloco_id" => 5,
                "regiao_id" => 37,
            ],
            [
                "nome" => "ValeriaII",
                "bloco_id" => 5,
                "regiao_id" => 37,
            ],
            [
                "nome" => "Candeias",
                "bloco_id" => 6,
                "regiao_id" => 38,
            ],
            [
                "nome" => "Ferrolho",
                "bloco_id" => 6,
                "regiao_id" => 38,
            ],
            [
                "nome" => "Malemba",
                "bloco_id" => 6,
                "regiao_id" => 38,
            ],
            [
                "nome" => "Núcleo-Passe3",
                "bloco_id" => 6,
                "regiao_id" => 38,
            ],
            [
                "nome" => "Socorro",
                "bloco_id" => 6,
                "regiao_id" => 38,
            ],
            [
                "nome" => "MadredeDeus",
                "bloco_id" => 6,
                "regiao_id" => 39,
            ],
            [
                "nome" => "Núcleo-BomJesusdosPassos",
                "bloco_id" => 6,
                "regiao_id" => 39,
            ],
            [
                "nome" => "Caipe",
                "bloco_id" => 6,
                "regiao_id" => 39,
            ],
            [
                "nome" => "PontadoCais",
                "bloco_id" => 6,
                "regiao_id" => 39,
            ],
            [
                "nome" => "NovaCandeias",
                "bloco_id" => 6,
                "regiao_id" => 40,
            ],
            [
                "nome" => "IlhaMare",
                "bloco_id" => 6,
                "regiao_id" => 40,
            ],
            [
                "nome" => "Passe",
                "bloco_id" => 6,
                "regiao_id" => 40,
            ],
            [
                "nome" => "PasseII",
                "bloco_id" => 6,
                "regiao_id" => 40,
            ],
            [
                "nome" => "Teixeira",
                "bloco_id" => 6,
                "regiao_id" => 40,
            ],
            [
                "nome" => "SãoFranscicodoConde",
                "bloco_id" => 6,
                "regiao_id" => 41,
            ],
            [
                "nome" => "Núcleo-Coroado",
                "bloco_id" => 6,
                "regiao_id" => 41,
            ],
            [
                "nome" => "VitóriadaConquista",
                "bloco_id" => 7,
                "regiao_id" => 42,
            ],
            [
                "nome" => "AltoMaron",
                "bloco_id" => 7,
                "regiao_id" => 42,
            ],
            [
                "nome" => "Núcleo-Anage",
                "bloco_id" => 7,
                "regiao_id" => 42,
            ],
            [
                "nome" => "BarraChoca",
                "bloco_id" => 7,
                "regiao_id" => 42,
            ],
            [
                "nome" => "Itambe",
                "bloco_id" => 7,
                "regiao_id" => 42,
            ],
            [
                "nome" => "Núcleo-JoseGoncalves",
                "bloco_id" => 7,
                "regiao_id" => 42,
            ],
            [
                "nome" => "NovaCidade",
                "bloco_id" => 7,
                "regiao_id" => 42,
            ],
            [
                "nome" => "Núcleo-Veredinha",
                "bloco_id" => 7,
                "regiao_id" => 42,
            ],
            [
                "nome" => "VilaAmerica",
                "bloco_id" => 7,
                "regiao_id" => 42,
            ],
            [
                "nome" => "BairroBrasil",
                "bloco_id" => 7,
                "regiao_id" => 43,
            ],
            [
                "nome" => "AvBrumado",
                "bloco_id" => 7,
                "regiao_id" => 43,
            ],
            [
                "nome" => "Kadija",
                "bloco_id" => 7,
                "regiao_id" => 43,
            ],
            [
                "nome" => "Patagonia",
                "bloco_id" => 7,
                "regiao_id" => 43,
            ],
            [
                "nome" => "VilaSerrana",
                "bloco_id" => 7,
                "regiao_id" => 43,
            ],
            [
                "nome" => "Brumado",
                "bloco_id" => 7,
                "regiao_id" => 44,
            ],
            [
                "nome" => "BarradaEstiva",
                "bloco_id" => 7,
                "regiao_id" => 44,
            ],
            [
                "nome" => "Núcleo-Cascavel",
                "bloco_id" => 7,
                "regiao_id" => 44,
            ],
            [
                "nome" => "Núcleo-Ibicoara",
                "bloco_id" => 7,
                "regiao_id" => 44,
            ],
            [
                "nome" => "Livramento",
                "bloco_id" => 7,
                "regiao_id" => 44,
            ],
            [
                "nome" => "Núcleo-Tanhacu",
                "bloco_id" => 7,
                "regiao_id" => 44,
            ],
            [
                "nome" => "Caetite",
                "bloco_id" => 7,
                "regiao_id" => 45,
            ],
            [
                "nome" => "Núcleo-Cacule",
                "bloco_id" => 7,
                "regiao_id" => 45,
            ],
            [
                "nome" => "Núcleo-Ibiassece",
                "bloco_id" => 7,
                "regiao_id" => 45,
            ],
            [
                "nome" => "Igapora",
                "bloco_id" => 7,
                "regiao_id" => 45,
            ],
            [
                "nome" => "CandidoSales",
                "bloco_id" => 7,
                "regiao_id" => 46,
            ],
            [
                "nome" => "Núcleo-AguasVermelhas",
                "bloco_id" => 7,
                "regiao_id" => 46,
            ],
            [
                "nome" => "Núcleo-DivisaAlegre",
                "bloco_id" => 7,
                "regiao_id" => 46,
            ],
            [
                "nome" => "Divinopolis",
                "bloco_id" => 7,
                "regiao_id" => 46,
            ],
            [
                "nome" => "Núcleo-MachadoMineiro",
                "bloco_id" => 7,
                "regiao_id" => 46,
            ],
            [
                "nome" => "Guanambi",
                "bloco_id" => 7,
                "regiao_id" => 47,
            ],
            [
                "nome" => "Carinhanha",
                "bloco_id" => 7,
                "regiao_id" => 47,
            ],
            [
                "nome" => "GuanambiII",
                "bloco_id" => 7,
                "regiao_id" => 47,
            ],
            [
                "nome" => "Núcleo-Iuiu",
                "bloco_id" => 7,
                "regiao_id" => 47,
            ],
            [
                "nome" => "Núcleo-LiciniodeAlmeida",
                "bloco_id" => 7,
                "regiao_id" => 47,
            ],
            [
                "nome" => "Núcleo-Mortugaba",
                "bloco_id" => 7,
                "regiao_id" => 47,
            ],
            [
                "nome" => "Palmas",
                "bloco_id" => 7,
                "regiao_id" => 47,
            ],
            [
                "nome" => "Núcleo-Urandi",
                "bloco_id" => 7,
                "regiao_id" => 47,
            ],
            [
                "nome" => "Ipiau",
                "bloco_id" => 7,
                "regiao_id" => 48,
            ],
            [
                "nome" => "Ibirataia",
                "bloco_id" => 7,
                "regiao_id" => 48,
            ],
            [
                "nome" => "Itagiba",
                "bloco_id" => 7,
                "regiao_id" => 48,
            ],
            [
                "nome" => "Ubatan",
                "bloco_id" => 7,
                "regiao_id" => 48,
            ],
            [
                "nome" => "Itapetinga",
                "bloco_id" => 7,
                "regiao_id" => 49,
            ],
            [
                "nome" => "Núcleo-Caatiba",
                "bloco_id" => 7,
                "regiao_id" => 49,
            ],
            [
                "nome" => "Itarantim",
                "bloco_id" => 7,
                "regiao_id" => 49,
            ],
            [
                "nome" => "Itororo",
                "bloco_id" => 7,
                "regiao_id" => 49,
            ],
            [
                "nome" => "Macarani",
                "bloco_id" => 7,
                "regiao_id" => 49,
            ],
            [
                "nome" => "Núcleo-Potiragua",
                "bloco_id" => 7,
                "regiao_id" => 49,
            ],
            [
                "nome" => "VilaRiachao",
                "bloco_id" => 7,
                "regiao_id" => 49,
            ],
            [
                "nome" => "Jaguaquara",
                "bloco_id" => 7,
                "regiao_id" => 50,
            ],
            [
                "nome" => "Entrocamento",
                "bloco_id" => 7,
                "regiao_id" => 50,
            ],
            [
                "nome" => "Núcleo-Itirucu",
                "bloco_id" => 7,
                "regiao_id" => 50,
            ],
            [
                "nome" => "Maracas",
                "bloco_id" => 7,
                "regiao_id" => 50,
            ],
            [
                "nome" => "SantaInes",
                "bloco_id" => 7,
                "regiao_id" => 50,
            ],
            [
                "nome" => "Jequie",
                "bloco_id" => 7,
                "regiao_id" => 51,
            ],
            [
                "nome" => "AguaBrancas",
                "bloco_id" => 7,
                "regiao_id" => 51,
            ],
            [
                "nome" => "Núcleo-Jitauna",
                "bloco_id" => 7,
                "regiao_id" => 51,
            ],
            [
                "nome" => "JequieIII",
                "bloco_id" => 7,
                "regiao_id" => 51,
            ],
            [
                "nome" => "KM3",
                "bloco_id" => 7,
                "regiao_id" => 51,
            ],
            [
                "nome" => "Núcleo-ManoelVitorino",
                "bloco_id" => 7,
                "regiao_id" => 51,
            ],
            [
                "nome" => "Paudeferro",
                "bloco_id" => 7,
                "regiao_id" => 51,
            ],
            [
                "nome" => "JequieIV",
                "bloco_id" => 7,
                "regiao_id" => 52,
            ],
            [
                "nome" => "Núcleo-Itagi",
                "bloco_id" => 7,
                "regiao_id" => 52,
            ],
            [
                "nome" => "Paramirim",
                "bloco_id" => 7,
                "regiao_id" => 53,
            ],
            [
                "nome" => "Núcleo-Boquira",
                "bloco_id" => 7,
                "regiao_id" => 53,
            ],
            [
                "nome" => "Núcleo-Botipora",
                "bloco_id" => 7,
                "regiao_id" => 53,
            ],
            [
                "nome" => "Núcleo-EricoCardoso",
                "bloco_id" => 7,
                "regiao_id" => 53,
            ],
            [
                "nome" => "Núcleo-Ibipitanga",
                "bloco_id" => 7,
                "regiao_id" => 53,
            ],
            [
                "nome" => "Macaubas",
                "bloco_id" => 7,
                "regiao_id" => 53,
            ],
            [
                "nome" => "Núcleo-RiodoPires",
                "bloco_id" => 7,
                "regiao_id" => 53,
            ],
            [
                "nome" => "Pocoes",
                "bloco_id" => 7,
                "regiao_id" => 54,
            ],
            [
                "nome" => "Núcleo-BoaNova",
                "bloco_id" => 7,
                "regiao_id" => 54,
            ],
            [
                "nome" => "Núcleo-BomJesusdaSerra",
                "bloco_id" => 7,
                "regiao_id" => 54,
            ],
            [
                "nome" => "Ibicui",
                "bloco_id" => 7,
                "regiao_id" => 54,
            ],
            [
                "nome" => "Iguai",
                "bloco_id" => 7,
                "regiao_id" => 54,
            ],
            [
                "nome" => "Planalto",
                "bloco_id" => 7,
                "regiao_id" => 54,
            ],
            [
                "nome" => "UrbisVI",
                "bloco_id" => 7,
                "regiao_id" => 55,
            ],
            [
                "nome" => "BeloCampo",
                "bloco_id" => 7,
                "regiao_id" => 55,
            ],
            [
                "nome" => "Núcleo-Condeubas",
                "bloco_id" => 7,
                "regiao_id" => 55,
            ],
            [
                "nome" => "Núcleo-Encruzilhada",
                "bloco_id" => 7,
                "regiao_id" => 55,
            ],
            [
                "nome" => "TrabEspecial-Limeira",
                "bloco_id" => 7,
                "regiao_id" => 55,
            ],
            [
                "nome" => "Núcleo-Piripa",
                "bloco_id" => 7,
                "regiao_id" => 55,
            ],
            [
                "nome" => "TrabEspecial-Tremendal",
                "bloco_id" => 7,
                "regiao_id" => 55,
            ],
            [
                "nome" => "DoisLeões",
                "bloco_id" => 8,
                "regiao_id" => 56,
            ],
            [
                "nome" => "AvenidaPeixe",
                "bloco_id" => 8,
                "regiao_id" => 56,
            ],
            [
                "nome" => "Lapinha",
                "bloco_id" => 8,
                "regiao_id" => 56,
            ],
            [
                "nome" => "Paumiudo",
                "bloco_id" => 8,
                "regiao_id" => 56,
            ],
            [
                "nome" => "Retiro",
                "bloco_id" => 8,
                "regiao_id" => 56,
            ],
            [
                "nome" => "Aquidaba",
                "bloco_id" => 8,
                "regiao_id" => 57,
            ],
            [
                "nome" => "Brotas",
                "bloco_id" => 8,
                "regiao_id" => 58,
            ],
            [
                "nome" => "CineCentro",
                "bloco_id" => 8,
                "regiao_id" => 59,
            ],
            [
                "nome" => "Tijolo",
                "bloco_id" => 8,
                "regiao_id" => 59,
            ],
            [
                "nome" => "CosmedeFarias",
                "bloco_id" => 8,
                "regiao_id" => 60,
            ],
            [
                "nome" => "EngVelhodeBrotas",
                "bloco_id" => 8,
                "regiao_id" => 61,
            ],
            [
                "nome" => "Federação",
                "bloco_id" => 8,
                "regiao_id" => 62,
            ],
            [
                "nome" => "AltodasPombas",
                "bloco_id" => 8,
                "regiao_id" => 62,
            ],
            [
                "nome" => "EngVelhodeFederação",
                "bloco_id" => 8,
                "regiao_id" => 62,
            ],
            [
                "nome" => "Liberdade",
                "bloco_id" => 8,
                "regiao_id" => 63,
            ],
            [
                "nome" => "Meireles",
                "bloco_id" => 8,
                "regiao_id" => 63,
            ],
            [
                "nome" => "MatatudeBrotas",
                "bloco_id" => 8,
                "regiao_id" => 64,
            ],
            [
                "nome" => "LuisAnselmo",
                "bloco_id" => 8,
                "regiao_id" => 64,
            ],
            [
                "nome" => "PaudaLima",
                "bloco_id" => 8,
                "regiao_id" => 65,
            ],
            [
                "nome" => "JardimCajazeiras",
                "bloco_id" => 8,
                "regiao_id" => 65,
            ],
            [
                "nome" => "ValedaMuriçoca",
                "bloco_id" => 8,
                "regiao_id" => 66,
            ],
            [
                "nome" => "AltodaOndina",
                "bloco_id" => 8,
                "regiao_id" => 66,
            ],
            [
                "nome" => "ValedoMatatu",
                "bloco_id" => 8,
                "regiao_id" => 67,
            ],
            [
                "nome" => "VascodaGama",
                "bloco_id" => 8,
                "regiao_id" => 68,
            ],
            [
                "nome" => "FazendaGrande",
                "bloco_id" => 9,
                "regiao_id" => 69,
            ],
            [
                "nome" => "Jaqueira",
                "bloco_id" => 9,
                "regiao_id" => 69,
            ],
            [
                "nome" => "CampinasdePiraja",
                "bloco_id" => 9,
                "regiao_id" => 70,
            ],
            [
                "nome" => "Calabetao",
                "bloco_id" => 9,
                "regiao_id" => 70,
            ],
            [
                "nome" => "LargodoTanque",
                "bloco_id" => 9,
                "regiao_id" => 71,
            ],
            [
                "nome" => "PirajadoLobato",
                "bloco_id" => 9,
                "regiao_id" => 72,
            ],
            [
                "nome" => "Piraja",
                "bloco_id" => 9,
                "regiao_id" => 72,
            ],
            [
                "nome" => "SanMartin",
                "bloco_id" => 9,
                "regiao_id" => 73,
            ],
            [
                "nome" => "IAPI",
                "bloco_id" => 9,
                "regiao_id" => 73,
            ],
            [
                "nome" => "SantaMonica",
                "bloco_id" => 9,
                "regiao_id" => 73,
            ],
            [
                "nome" => "SãoCaetano",
                "bloco_id" => 9,
                "regiao_id" => 74,
            ],
            [
                "nome" => "BoaVista",
                "bloco_id" => 9,
                "regiao_id" => 74,
            ],
            [
                "nome" => "BoaVistaII",
                "bloco_id" => 9,
                "regiao_id" => 74,
            ],
            [
                "nome" => "Capilinha",
                "bloco_id" => 9,
                "regiao_id" => 74,
            ],
            [
                "nome" => "FeiradeSantana",
                "bloco_id" => 10,
                "regiao_id" => 75,
            ],
            [
                "nome" => "AsaBranca",
                "bloco_id" => 10,
                "regiao_id" => 75,
            ],
            [
                "nome" => "FeiraX",
                "bloco_id" => 10,
                "regiao_id" => 75,
            ],
            [
                "nome" => "GeorgeAmerico",
                "bloco_id" => 10,
                "regiao_id" => 75,
            ],
            [
                "nome" => "Núcleo-Lamarao",
                "bloco_id" => 10,
                "regiao_id" => 75,
            ],
            [
                "nome" => "Queimadinha",
                "bloco_id" => 10,
                "regiao_id" => 75,
            ],
            [
                "nome" => "RuaNova",
                "bloco_id" => 10,
                "regiao_id" => 75,
            ],
            [
                "nome" => "SantaBarbara",
                "bloco_id" => 10,
                "regiao_id" => 75,
            ],
            [
                "nome" => "SantoAntonio",
                "bloco_id" => 10,
                "regiao_id" => 75,
            ],
            [
                "nome" => "Sobradinho",
                "bloco_id" => 10,
                "regiao_id" => 75,
            ],
            [
                "nome" => "SobradinhoII",
                "bloco_id" => 10,
                "regiao_id" => 75,
            ],
            [
                "nome" => "TomedeSouza",
                "bloco_id" => 10,
                "regiao_id" => 75,
            ],
            [
                "nome" => "AmeliaRodrigues",
                "bloco_id" => 10,
                "regiao_id" => 76,
            ],
            [
                "nome" => "TrabEspecial-Aliança",
                "bloco_id" => 10,
                "regiao_id" => 76,
            ],
            [
                "nome" => "Núcleo-Jacu",
                "bloco_id" => 10,
                "regiao_id" => 76,
            ],
            [
                "nome" => "Núcleo-SãoBento",
                "bloco_id" => 10,
                "regiao_id" => 76,
            ],
            [
                "nome" => "TerraNova",
                "bloco_id" => 10,
                "regiao_id" => 76,
            ],
            [
                "nome" => "CampoLimpo",
                "bloco_id" => 10,
                "regiao_id" => 77,
            ],
            [
                "nome" => "Boqueirão",
                "bloco_id" => 10,
                "regiao_id" => 77,
            ],
            [
                "nome" => "JardimCruzeiro",
                "bloco_id" => 10,
                "regiao_id" => 77,
            ],
            [
                "nome" => "Núcleo-MariaQuiteria",
                "bloco_id" => 10,
                "regiao_id" => 77,
            ],
            [
                "nome" => "Núcleo-NovoHorizonte",
                "bloco_id" => 10,
                "regiao_id" => 77,
            ],
            [
                "nome" => "Núcleo-SãoJose",
                "bloco_id" => 10,
                "regiao_id" => 77,
            ],
            [
                "nome" => "ParqueIpe",
                "bloco_id" => 10,
                "regiao_id" => 77,
            ],
            [
                "nome" => "ConceiçãodoCoite",
                "bloco_id" => 10,
                "regiao_id" => 78,
            ],
            [
                "nome" => "Núcleo-Retirolandia",
                "bloco_id" => 10,
                "regiao_id" => 78,
            ],
            [
                "nome" => "RiachaodoJacuipe",
                "bloco_id" => 10,
                "regiao_id" => 78,
            ],
            [
                "nome" => "SantaLuz",
                "bloco_id" => 10,
                "regiao_id" => 78,
            ],
            [
                "nome" => "Valente",
                "bloco_id" => 10,
                "regiao_id" => 78,
            ],
            [
                "nome" => "ConceiçãodoJacuípe",
                "bloco_id" => 10,
                "regiao_id" => 79,
            ],
            [
                "nome" => "CoraçãodeMaria",
                "bloco_id" => 10,
                "regiao_id" => 79,
            ],
            [
                "nome" => "Núcleo-Lustosa",
                "bloco_id" => 10,
                "regiao_id" => 79,
            ],
            [
                "nome" => "Ipira",
                "bloco_id" => 10,
                "regiao_id" => 80,
            ],
            [
                "nome" => "Anguera",
                "bloco_id" => 10,
                "regiao_id" => 80,
            ],
            [
                "nome" => "BaixaGrande",
                "bloco_id" => 10,
                "regiao_id" => 80,
            ],
            [
                "nome" => "Bravo",
                "bloco_id" => 10,
                "regiao_id" => 80,
            ],
            [
                "nome" => "SerraPreta",
                "bloco_id" => 10,
                "regiao_id" => 80,
            ],
            [
                "nome" => "MundoNovo",
                "bloco_id" => 10,
                "regiao_id" => 80,
            ],
            [
                "nome" => "Núcleo-Romana",
                "bloco_id" => 10,
                "regiao_id" => 80,
            ],
            [
                "nome" => "Irece",
                "bloco_id" => 10,
                "regiao_id" => 81,
            ],
            [
                "nome" => "Núcleo-Angical",
                "bloco_id" => 10,
                "regiao_id" => 81,
            ],
            [
                "nome" => "Núcleo-ArturAlves",
                "bloco_id" => 10,
                "regiao_id" => 81,
            ],
            [
                "nome" => "Núcleo-BarradoMendes",
                "bloco_id" => 10,
                "regiao_id" => 81,
            ],
            [
                "nome" => "BarroAlto",
                "bloco_id" => 10,
                "regiao_id" => 81,
            ],
            [
                "nome" => "Cafarnaum",
                "bloco_id" => 10,
                "regiao_id" => 81,
            ],
            [
                "nome" => "Canarana",
                "bloco_id" => 10,
                "regiao_id" => 81,
            ],
            [
                "nome" => "Central",
                "bloco_id" => 10,
                "regiao_id" => 81,
            ],
            [
                "nome" => "TrabEspecial-Ibitita",
                "bloco_id" => 10,
                "regiao_id" => 81,
            ],
            [
                "nome" => "IreceII",
                "bloco_id" => 10,
                "regiao_id" => 81,
            ],
            [
                "nome" => "JoaoDourado",
                "bloco_id" => 10,
                "regiao_id" => 81,
            ],
            [
                "nome" => "Lapao",
                "bloco_id" => 10,
                "regiao_id" => 81,
            ],
            [
                "nome" => "MorrodoChapeu",
                "bloco_id" => 10,
                "regiao_id" => 81,
            ],
            [
                "nome" => "Núcleo-Palmeiras",
                "bloco_id" => 10,
                "regiao_id" => 81,
            ],
            [
                "nome" => "Piata",
                "bloco_id" => 10,
                "regiao_id" => 81,
            ],
            [
                "nome" => "PresidenteDutraII",
                "bloco_id" => 10,
                "regiao_id" => 81,
            ],
            [
                "nome" => "Salobro",
                "bloco_id" => 10,
                "regiao_id" => 81,
            ],
            [
                "nome" => "Seabra",
                "bloco_id" => 10,
                "regiao_id" => 81,
            ],
            [
                "nome" => "Núcleo-Uibai",
                "bloco_id" => 10,
                "regiao_id" => 81,
            ],
            [
                "nome" => "Jacobina",
                "bloco_id" => 10,
                "regiao_id" => 82,
            ],
            [
                "nome" => "CapimGrosso",
                "bloco_id" => 10,
                "regiao_id" => 82,
            ],
            [
                "nome" => "Núcleo-Gaviao",
                "bloco_id" => 10,
                "regiao_id" => 82,
            ],
            [
                "nome" => "JacobinaIV",
                "bloco_id" => 10,
                "regiao_id" => 82,
            ],
            [
                "nome" => "MiguelCalmon",
                "bloco_id" => 10,
                "regiao_id" => 82,
            ],
            [
                "nome" => "Piritiba",
                "bloco_id" => 10,
                "regiao_id" => 82,
            ],
            [
                "nome" => "Saude",
                "bloco_id" => 10,
                "regiao_id" => 82,
            ],
            [
                "nome" => "Serrolandia",
                "bloco_id" => 10,
                "regiao_id" => 82,
            ],
            [
                "nome" => "Núcleo-Umburanas",
                "bloco_id" => 10,
                "regiao_id" => 82,
            ],
            [
                "nome" => "Núcleo-VarzeadoPoco",
                "bloco_id" => 10,
                "regiao_id" => 82,
            ],
            [
                "nome" => "VarzeaNova",
                "bloco_id" => 10,
                "regiao_id" => 82,
            ],
            [
                "nome" => "PresidenteDutra",
                "bloco_id" => 10,
                "regiao_id" => 83,
            ],
            [
                "nome" => "Aviario",
                "bloco_id" => 10,
                "regiao_id" => 83,
            ],
            [
                "nome" => "Humildes",
                "bloco_id" => 10,
                "regiao_id" => 83,
            ],
            [
                "nome" => "Limoeiro",
                "bloco_id" => 10,
                "regiao_id" => 83,
            ],
            [
                "nome" => "SantoEstevão",
                "bloco_id" => 10,
                "regiao_id" => 84,
            ],
            [
                "nome" => "Pilao",
                "bloco_id" => 10,
                "regiao_id" => 84,
            ],
            [
                "nome" => "RafaelJambeiro",
                "bloco_id" => 10,
                "regiao_id" => 84,
            ],
            [
                "nome" => "SãoGonçalosdosCampos",
                "bloco_id" => 10,
                "regiao_id" => 85,
            ],
            [
                "nome" => "ConceicaodeFeira",
                "bloco_id" => 10,
                "regiao_id" => 85,
            ],
            [
                "nome" => "XiqueXique",
                "bloco_id" => 10,
                "regiao_id" => 86,
            ],
            [
                "nome" => "BarradoRioGrande",
                "bloco_id" => 10,
                "regiao_id" => 86,
            ],
            [
                "nome" => "FeiradeSantanaII",
                "bloco_id" => 11,
                "regiao_id" => 87,
            ],
            [
                "nome" => "Irara",
                "bloco_id" => 11,
                "regiao_id" => 87,
            ],
            [
                "nome" => "Mangabeira",
                "bloco_id" => 11,
                "regiao_id" => 87,
            ],
            [
                "nome" => "Núcleo-Ouricanga",
                "bloco_id" => 11,
                "regiao_id" => 87,
            ],
            [
                "nome" => "Santanopolis",
                "bloco_id" => 11,
                "regiao_id" => 87,
            ],
            [
                "nome" => "Viveiros",
                "bloco_id" => 11,
                "regiao_id" => 87,
            ],
            [
                "nome" => "Cachoeira",
                "bloco_id" => 11,
                "regiao_id" => 88,
            ],
            [
                "nome" => "Capoeirucu",
                "bloco_id" => 11,
                "regiao_id" => 88,
            ],
            [
                "nome" => "Núcleo-Coqueiro",
                "bloco_id" => 11,
                "regiao_id" => 88,
            ],
            [
                "nome" => "Maragogipe",
                "bloco_id" => 11,
                "regiao_id" => 88,
            ],
            [
                "nome" => "Núcleo-Tabuleiro",
                "bloco_id" => 11,
                "regiao_id" => 88,
            ],
            [
                "nome" => "Cansanção",
                "bloco_id" => 11,
                "regiao_id" => 89,
            ],
            [
                "nome" => "Núcleo-Nordestina",
                "bloco_id" => 11,
                "regiao_id" => 89,
            ],
            [
                "nome" => "Núcleo-Queimadas",
                "bloco_id" => 11,
                "regiao_id" => 89,
            ],
            [
                "nome" => "Núcleo-RomuloCampos",
                "bloco_id" => 11,
                "regiao_id" => 89,
            ],
            [
                "nome" => "EuclidesdaCunha",
                "bloco_id" => 11,
                "regiao_id" => 90,
            ],
            [
                "nome" => "MonteSanto",
                "bloco_id" => 11,
                "regiao_id" => 90,
            ],
            [
                "nome" => "Núcleo-Quinjingue",
                "bloco_id" => 11,
                "regiao_id" => 90,
            ],
            [
                "nome" => "Tucano",
                "bloco_id" => 11,
                "regiao_id" => 90,
            ],
            [
                "nome" => "Núcleo-Uaua",
                "bloco_id" => 11,
                "regiao_id" => 90,
            ],
            [
                "nome" => "Itaberaba",
                "bloco_id" => 11,
                "regiao_id" => 91,
            ],
            [
                "nome" => "Núcleo-BoaVistadoTupim",
                "bloco_id" => 11,
                "regiao_id" => 91,
            ],
            [
                "nome" => "Iacu",
                "bloco_id" => 11,
                "regiao_id" => 91,
            ],
            [
                "nome" => "Núcleo-Lajedinho",
                "bloco_id" => 11,
                "regiao_id" => 91,
            ],
            [
                "nome" => "RuiBarrosa",
                "bloco_id" => 11,
                "regiao_id" => 91,
            ],
            [
                "nome" => "Utinga",
                "bloco_id" => 11,
                "regiao_id" => 91,
            ],
            [
                "nome" => "Núcleo-Wagner",
                "bloco_id" => 11,
                "regiao_id" => 91,
            ],
            [
                "nome" => "Muritiba",
                "bloco_id" => 11,
                "regiao_id" => 92,
            ],
            [
                "nome" => "Cabeceiras",
                "bloco_id" => 11,
                "regiao_id" => 92,
            ],
            [
                "nome" => "GovMangabeira",
                "bloco_id" => 11,
                "regiao_id" => 92,
            ],
            [
                "nome" => "Serrinha",
                "bloco_id" => 11,
                "regiao_id" => 93,
            ],
            [
                "nome" => "AguaFria",
                "bloco_id" => 11,
                "regiao_id" => 93,
            ],
            [
                "nome" => "Araci",
                "bloco_id" => 11,
                "regiao_id" => 93,
            ],
            [
                "nome" => "Barrocas",
                "bloco_id" => 11,
                "regiao_id" => 93,
            ],
            [
                "nome" => "Biritinga",
                "bloco_id" => 11,
                "regiao_id" => 93,
            ],
            [
                "nome" => "Núcleo-Candeal",
                "bloco_id" => 11,
                "regiao_id" => 93,
            ],
            [
                "nome" => "CidadeNova",
                "bloco_id" => 11,
                "regiao_id" => 93,
            ],
            [
                "nome" => "Núcleo-Mombaca",
                "bloco_id" => 11,
                "regiao_id" => 93,
            ],
            [
                "nome" => "Núcleo-Quilombola",
                "bloco_id" => 11,
                "regiao_id" => 93,
            ],
            [
                "nome" => "Núcleo-Quinjin",
                "bloco_id" => 11,
                "regiao_id" => 93,
            ],
            [
                "nome" => "Núcleo-Teabaia",
                "bloco_id" => 11,
                "regiao_id" => 93,
            ],
            [
                "nome" => "Teofilandia",
                "bloco_id" => 11,
                "regiao_id" => 93,
            ],
            [
                "nome" => "Tomba",
                "bloco_id" => 11,
                "regiao_id" => 94,
            ],
            [
                "nome" => "FeiraVII",
                "bloco_id" => 11,
                "regiao_id" => 94,
            ],
            [
                "nome" => "SergioCarneiro",
                "bloco_id" => 11,
                "regiao_id" => 94,
            ],
            [
                "nome" => "TombaI",
                "bloco_id" => 11,
                "regiao_id" => 94,
            ],
            [
                "nome" => "Itabuna",
                "bloco_id" => 12,
                "regiao_id" => 95,
            ],
            [
                "nome" => "Núcleo-AurelinoLeal",
                "bloco_id" => 12,
                "regiao_id" => 95,
            ],
            [
                "nome" => "Buerarema",
                "bloco_id" => 12,
                "regiao_id" => 95,
            ],
            [
                "nome" => "Coaraci",
                "bloco_id" => 12,
                "regiao_id" => 95,
            ],
            [
                "nome" => "Itajuipe",
                "bloco_id" => 12,
                "regiao_id" => 95,
            ],
            [
                "nome" => "JorgeAmado",
                "bloco_id" => 12,
                "regiao_id" => 95,
            ],
            [
                "nome" => "NovaFerradas",
                "bloco_id" => 12,
                "regiao_id" => 95,
            ],
            [
                "nome" => "SãoJosedaVitoria",
                "bloco_id" => 12,
                "regiao_id" => 95,
            ],
            [
                "nome" => "Ubaitaba",
                "bloco_id" => 12,
                "regiao_id" => 95,
            ],
            [
                "nome" => "Urucuca",
                "bloco_id" => 12,
                "regiao_id" => 95,
            ],
            [
                "nome" => "ItabunaII",
                "bloco_id" => 12,
                "regiao_id" => 96,
            ],
            [
                "nome" => "ItabunaIV",
                "bloco_id" => 12,
                "regiao_id" => 96,
            ],
            [
                "nome" => "Núcleo-SantaInesII",
                "bloco_id" => 12,
                "regiao_id" => 96,
            ],
            [
                "nome" => "SãoPedro",
                "bloco_id" => 12,
                "regiao_id" => 96,
            ],
            [
                "nome" => "ItabunaIII",
                "bloco_id" => 12,
                "regiao_id" => 97,
            ],
            [
                "nome" => "Camacan",
                "bloco_id" => 12,
                "regiao_id" => 97,
            ],
            [
                "nome" => "Núcleo-Itape",
                "bloco_id" => 12,
                "regiao_id" => 97,
            ],
            [
                "nome" => "Núcleo-MariaPinheiro",
                "bloco_id" => 12,
                "regiao_id" => 97,
            ],
            [
                "nome" => "Ilheus",
                "bloco_id" => 12,
                "regiao_id" => 98,
            ],
            [
                "nome" => "Núcleo-BcoVitoria",
                "bloco_id" => 12,
                "regiao_id" => 98,
            ],
            [
                "nome" => "Itacare",
                "bloco_id" => 12,
                "regiao_id" => 98,
            ],
            [
                "nome" => "NelsonCosta",
                "bloco_id" => 12,
                "regiao_id" => 98,
            ],
            [
                "nome" => "Núcleo-Salobrinho",
                "bloco_id" => 12,
                "regiao_id" => 98,
            ],
            [
                "nome" => "Vitoria",
                "bloco_id" => 12,
                "regiao_id" => 98,
            ],
            [
                "nome" => "Canavieras",
                "bloco_id" => 12,
                "regiao_id" => 99,
            ],
            [
                "nome" => "Núcleo-Paraiso",
                "bloco_id" => 12,
                "regiao_id" => 99,
            ],
            [
                "nome" => "Una",
                "bloco_id" => 12,
                "regiao_id" => 99,
            ],
            [
                "nome" => "Lomanto",
                "bloco_id" => 12,
                "regiao_id" => 100,
            ],
            [
                "nome" => "Núcleo-BarroPreto",
                "bloco_id" => 12,
                "regiao_id" => 100,
            ],
            [
                "nome" => "Ibicarai",
                "bloco_id" => 12,
                "regiao_id" => 100,
            ],
            [
                "nome" => "SantaCruzII",
                "bloco_id" => 12,
                "regiao_id" => 100,
            ],
            [
                "nome" => "Malhado",
                "bloco_id" => 12,
                "regiao_id" => 101,
            ],
            [
                "nome" => "Iguape",
                "bloco_id" => 12,
                "regiao_id" => 101,
            ],
            [
                "nome" => "Núcleo-Palmares",
                "bloco_id" => 12,
                "regiao_id" => 101,
            ],
            [
                "nome" => "TeotonioViela",
                "bloco_id" => 12,
                "regiao_id" => 101,
            ],
            [
                "nome" => "Itapuã",
                "bloco_id" => 13,
                "regiao_id" => 102,
            ],
            [
                "nome" => "AvenidaAliomar",
                "bloco_id" => 13,
                "regiao_id" => 103,
            ],
            [
                "nome" => "BairrodaPaz",
                "bloco_id" => 13,
                "regiao_id" => 104,
            ],
            [
                "nome" => "Mangueira",
                "bloco_id" => 13,
                "regiao_id" => 104,
            ],
            [
                "nome" => "Paralela",
                "bloco_id" => 13,
                "regiao_id" => 104,
            ],
            [
                "nome" => "BocadoRio",
                "bloco_id" => 13,
                "regiao_id" => 105,
            ],
            [
                "nome" => "BocadoRioI",
                "bloco_id" => 13,
                "regiao_id" => 105,
            ],
            [
                "nome" => "BocadoRioII",
                "bloco_id" => 13,
                "regiao_id" => 106,
            ],
            [
                "nome" => "Imbui",
                "bloco_id" => 13,
                "regiao_id" => 107,
            ],
            [
                "nome" => "SãoCristovão",
                "bloco_id" => 13,
                "regiao_id" => 108,
            ],
            [
                "nome" => "PqSãoCristovao",
                "bloco_id" => 13,
                "regiao_id" => 108,
            ],
            [
                "nome" => "Juazeiro",
                "bloco_id" => 14,
                "regiao_id" => 109,
            ],
            [
                "nome" => "Núcleo-AltodoAlinça",
                "bloco_id" => 14,
                "regiao_id" => 109,
            ],
            [
                "nome" => "Núcleo-Caraibas",
                "bloco_id" => 14,
                "regiao_id" => 109,
            ],
            [
                "nome" => "Núcleo-Carnaiba",
                "bloco_id" => 14,
                "regiao_id" => 109,
            ],
            [
                "nome" => "CasaNova",
                "bloco_id" => 14,
                "regiao_id" => 109,
            ],
            [
                "nome" => "CasteloBrancoJuzeiroII",
                "bloco_id" => 14,
                "regiao_id" => 109,
            ],
            [
                "nome" => "Núcleo-Curuca",
                "bloco_id" => 14,
                "regiao_id" => 109,
            ],
            [
                "nome" => "Núcleo-JoseRodrigues",
                "bloco_id" => 14,
                "regiao_id" => 109,
            ],
            [
                "nome" => "JuazeiroVIII",
                "bloco_id" => 14,
                "regiao_id" => 109,
            ],
            [
                "nome" => "Kide",
                "bloco_id" => 14,
                "regiao_id" => 109,
            ],
            [
                "nome" => "TrabEspecial-Manicoba",
                "bloco_id" => 14,
                "regiao_id" => 109,
            ],
            [
                "nome" => "Piranga",
                "bloco_id" => 14,
                "regiao_id" => 109,
            ],
            [
                "nome" => "Núcleo-Santana",
                "bloco_id" => 14,
                "regiao_id" => 109,
            ],
            [
                "nome" => "SãoFranscicodoJuazeiro",
                "bloco_id" => 14,
                "regiao_id" => 109,
            ],
            [
                "nome" => "SentoSe",
                "bloco_id" => 14,
                "regiao_id" => 109,
            ],
            [
                "nome" => "SobradinhoIII",
                "bloco_id" => 14,
                "regiao_id" => 109,
            ],
            [
                "nome" => "Bonfim",
                "bloco_id" => 14,
                "regiao_id" => 110,
            ],
            [
                "nome" => "Núcleo-Andorinha",
                "bloco_id" => 14,
                "regiao_id" => 110,
            ],
            [
                "nome" => "Núcleo-AntonioGoncalves",
                "bloco_id" => 14,
                "regiao_id" => 110,
            ],
            [
                "nome" => "CampoFormoso",
                "bloco_id" => 14,
                "regiao_id" => 110,
            ],
            [
                "nome" => "Núcleo-Filadelfia",
                "bloco_id" => 14,
                "regiao_id" => 110,
            ],
            [
                "nome" => "TrabEspecial-HorizonteNovo",
                "bloco_id" => 14,
                "regiao_id" => 110,
            ],
            [
                "nome" => "Núcleo-Igara",
                "bloco_id" => 14,
                "regiao_id" => 110,
            ],
            [
                "nome" => "Núcleo-Jaguarari",
                "bloco_id" => 14,
                "regiao_id" => 110,
            ],
            [
                "nome" => "Pindobacu",
                "bloco_id" => 14,
                "regiao_id" => 110,
            ],
            [
                "nome" => "Núcleo-PontoNovo",
                "bloco_id" => 14,
                "regiao_id" => 110,
            ],
            [
                "nome" => "PauloAfonso",
                "bloco_id" => 14,
                "regiao_id" => 111,
            ],
            [
                "nome" => "Núcleo-Gloria",
                "bloco_id" => 14,
                "regiao_id" => 111,
            ],
            [
                "nome" => "JardimBahia",
                "bloco_id" => 14,
                "regiao_id" => 111,
            ],
            [
                "nome" => "Jeremoabo",
                "bloco_id" => 14,
                "regiao_id" => 111,
            ],
            [
                "nome" => "Núcleo-Riacho",
                "bloco_id" => 14,
                "regiao_id" => 111,
            ],
            [
                "nome" => "TrabEspecial-Rodelas",
                "bloco_id" => 14,
                "regiao_id" => 111,
            ],
            [
                "nome" => "TancredoNevesIV",
                "bloco_id" => 14,
                "regiao_id" => 111,
            ],
            [
                "nome" => "Remanso",
                "bloco_id" => 14,
                "regiao_id" => 112,
            ],
            [
                "nome" => "Núcleo-CampoAlegre",
                "bloco_id" => 14,
                "regiao_id" => 112,
            ],
            [
                "nome" => "PilaoArcado",
                "bloco_id" => 14,
                "regiao_id" => 112,
            ],
            [
                "nome" => "Pernambues",
                "bloco_id" => 15,
                "regiao_id" => 113,
            ],
            [
                "nome" => "Núcleo-Cabula",
                "bloco_id" => 15,
                "regiao_id" => 113,
            ],
            [
                "nome" => "Saramandaia",
                "bloco_id" => 15,
                "regiao_id" => 113,
            ],
            [
                "nome" => "SãoGonçalodoRetiro",
                "bloco_id" => 15,
                "regiao_id" => 113,
            ],
            [
                "nome" => "Barra",
                "bloco_id" => 15,
                "regiao_id" => 114,
            ],
            [
                "nome" => "Calabar",
                "bloco_id" => 15,
                "regiao_id" => 114,
            ],
            [
                "nome" => "Itaparica",
                "bloco_id" => 15,
                "regiao_id" => 115,
            ],
            [
                "nome" => "Gameleira",
                "bloco_id" => 15,
                "regiao_id" => 115,
            ],
            [
                "nome" => "Núcleo-Misericordia",
                "bloco_id" => 15,
                "regiao_id" => 115,
            ],
            [
                "nome" => "MarGrande",
                "bloco_id" => 15,
                "regiao_id" => 116,
            ],
            [
                "nome" => "Aratuba",
                "bloco_id" => 15,
                "regiao_id" => 116,
            ],
            [
                "nome" => "Núcleo-Baiacu",
                "bloco_id" => 15,
                "regiao_id" => 116,
            ],
            [
                "nome" => "BarradoGil",
                "bloco_id" => 15,
                "regiao_id" => 116,
            ],
            [
                "nome" => "BarradoPote",
                "bloco_id" => 15,
                "regiao_id" => 116,
            ],
            [
                "nome" => "GamboaII",
                "bloco_id" => 15,
                "regiao_id" => 116,
            ],
            [
                "nome" => "Núcleo-Jiribatuba",
                "bloco_id" => 15,
                "regiao_id" => 116,
            ],
            [
                "nome" => "Nordeste",
                "bloco_id" => 15,
                "regiao_id" => 117,
            ],
            [
                "nome" => "Pituba",
                "bloco_id" => 15,
                "regiao_id" => 118,
            ],
            [
                "nome" => "RioVermelho",
                "bloco_id" => 15,
                "regiao_id" => 118,
            ],
            [
                "nome" => "SantaCruz",
                "bloco_id" => 15,
                "regiao_id" => 119,
            ],
            [
                "nome" => "AltodaSantaCruz",
                "bloco_id" => 15,
                "regiao_id" => 119,
            ],
            [
                "nome" => "SãoRafael",
                "bloco_id" => 15,
                "regiao_id" => 120,
            ],
            [
                "nome" => "Canabrava",
                "bloco_id" => 15,
                "regiao_id" => 120,
            ],
            [
                "nome" => "SetedeAbril",
                "bloco_id" => 15,
                "regiao_id" => 121,
            ],
            [
                "nome" => "MariaLucia",
                "bloco_id" => 15,
                "regiao_id" => 121,
            ],
            [
                "nome" => "NovaEsperanca",
                "bloco_id" => 15,
                "regiao_id" => 121,
            ],
            [
                "nome" => "ValedasPedrinhas",
                "bloco_id" => 15,
                "regiao_id" => 122,
            ],
            [
                "nome" => "SantoAntôniodeJesus",
                "bloco_id" => 16,
                "regiao_id" => 123,
            ],
            [
                "nome" => "Andai",
                "bloco_id" => 16,
                "regiao_id" => 123,
            ],
            [
                "nome" => "Núcleo-AreiaGrosso",
                "bloco_id" => 16,
                "regiao_id" => 123,
            ],
            [
                "nome" => "Núcleo-DomMacedoCosta",
                "bloco_id" => 16,
                "regiao_id" => 123,
            ],
            [
                "nome" => "Núcleo-Jequirica",
                "bloco_id" => 16,
                "regiao_id" => 123,
            ],
            [
                "nome" => "TancredoNevesIII",
                "bloco_id" => 16,
                "regiao_id" => 123,
            ],
            [
                "nome" => "Ubaira",
                "bloco_id" => 16,
                "regiao_id" => 123,
            ],
            [
                "nome" => "Amargosa",
                "bloco_id" => 16,
                "regiao_id" => 124,
            ],
            [
                "nome" => "Núcleo-Brejoes",
                "bloco_id" => 16,
                "regiao_id" => 124,
            ],
            [
                "nome" => "Catiara",
                "bloco_id" => 16,
                "regiao_id" => 124,
            ],
            [
                "nome" => "Núcleo-ElisioMedrado",
                "bloco_id" => 16,
                "regiao_id" => 124,
            ],
            [
                "nome" => "Núcleo-KM100",
                "bloco_id" => 16,
                "regiao_id" => 124,
            ],
            [
                "nome" => "Milagres",
                "bloco_id" => 16,
                "regiao_id" => 124,
            ],
            [
                "nome" => "Mutuipe",
                "bloco_id" => 16,
                "regiao_id" => 124,
            ],
            [
                "nome" => "CastroAlves",
                "bloco_id" => 16,
                "regiao_id" => 125,
            ],
            [
                "nome" => "Itatim",
                "bloco_id" => 16,
                "regiao_id" => 125,
            ],
            [
                "nome" => "Núcleo-SantaTerezinhaII",
                "bloco_id" => 16,
                "regiao_id" => 125,
            ],
            [
                "nome" => "CruzdasAlmas",
                "bloco_id" => 16,
                "regiao_id" => 126,
            ],
            [
                "nome" => "Núcleo-Chapada",
                "bloco_id" => 16,
                "regiao_id" => 126,
            ],
            [
                "nome" => "Núcleo-ConceicaodeAlmeida",
                "bloco_id" => 16,
                "regiao_id" => 126,
            ],
            [
                "nome" => "CruzdasAlmasII",
                "bloco_id" => 16,
                "regiao_id" => 126,
            ],
            [
                "nome" => "PauFerro",
                "bloco_id" => 16,
                "regiao_id" => 126,
            ],
            [
                "nome" => "SãoJosedoItapora",
                "bloco_id" => 16,
                "regiao_id" => 126,
            ],
            [
                "nome" => "Sapeacu",
                "bloco_id" => 16,
                "regiao_id" => 126,
            ],
            [
                "nome" => "Gandu",
                "bloco_id" => 16,
                "regiao_id" => 127,
            ],
            [
                "nome" => "Núcleo-Apuarema",
                "bloco_id" => 16,
                "regiao_id" => 127,
            ],
            [
                "nome" => "Itamari",
                "bloco_id" => 16,
                "regiao_id" => 127,
            ],
            [
                "nome" => "Núcleo-PiraidoNorte",
                "bloco_id" => 16,
                "regiao_id" => 127,
            ],
            [
                "nome" => "Núcleo-Teolandia",
                "bloco_id" => 16,
                "regiao_id" => 127,
            ],
            [
                "nome" => "WGuimaraes",
                "bloco_id" => 16,
                "regiao_id" => 127,
            ],
            [
                "nome" => "Nazare",
                "bloco_id" => 16,
                "regiao_id" => 128,
            ],
            [
                "nome" => "Aratuipe",
                "bloco_id" => 16,
                "regiao_id" => 128,
            ],
            [
                "nome" => "Encarnacao",
                "bloco_id" => 16,
                "regiao_id" => 128,
            ],
            [
                "nome" => "Núcleo-EnseadadeSalinas",
                "bloco_id" => 16,
                "regiao_id" => 128,
            ],
            [
                "nome" => "Núcleo-Junco",
                "bloco_id" => 16,
                "regiao_id" => 128,
            ],
            [
                "nome" => "Núcleo-MunizFerreira",
                "bloco_id" => 16,
                "regiao_id" => 128,
            ],
            [
                "nome" => "NazareII",
                "bloco_id" => 16,
                "regiao_id" => 128,
            ],
            [
                "nome" => "Salinas",
                "bloco_id" => 16,
                "regiao_id" => 128,
            ],
            [
                "nome" => "SãoBernado",
                "bloco_id" => 16,
                "regiao_id" => 128,
            ],
            [
                "nome" => "SãoRoque",
                "bloco_id" => 16,
                "regiao_id" => 128,
            ],
            [
                "nome" => "SãoBenedito",
                "bloco_id" => 16,
                "regiao_id" => 129,
            ],
            [
                "nome" => "Varzedo",
                "bloco_id" => 16,
                "regiao_id" => 129,
            ],
            [
                "nome" => "Núcleo-Laje",
                "bloco_id" => 16,
                "regiao_id" => 129,
            ],
            [
                "nome" => "Valença",
                "bloco_id" => 16,
                "regiao_id" => 130,
            ],
            [
                "nome" => "Núcleo-Gamboa",
                "bloco_id" => 16,
                "regiao_id" => 130,
            ],
            [
                "nome" => "MorrodeSãoPaulo",
                "bloco_id" => 16,
                "regiao_id" => 130,
            ],
            [
                "nome" => "Pitanga",
                "bloco_id" => 16,
                "regiao_id" => 130,
            ],
            [
                "nome" => "Taperoa",
                "bloco_id" => 16,
                "regiao_id" => 130,
            ],
            [
                "nome" => "ValençaIIBolivia",
                "bloco_id" => 16,
                "regiao_id" => 131,
            ],
            [
                "nome" => "Camamu",
                "bloco_id" => 16,
                "regiao_id" => 131,
            ],
            [
                "nome" => "Itubera",
                "bloco_id" => 16,
                "regiao_id" => 131,
            ],
            [
                "nome" => "Núcleo-NiloPecanha",
                "bloco_id" => 16,
                "regiao_id" => 131,
            ],
            [
                "nome" => "SimõesFilho",
                "bloco_id" => 17,
                "regiao_id" => 132,
            ],
            [
                "nome" => "KM25",
                "bloco_id" => 17,
                "regiao_id" => 132,
            ],
            [
                "nome" => "Mapele",
                "bloco_id" => 17,
                "regiao_id" => 132,
            ],
            [
                "nome" => "Núcleo-Renatao",
                "bloco_id" => 17,
                "regiao_id" => 132,
            ],
            [
                "nome" => "SimoesFilhoII",
                "bloco_id" => 17,
                "regiao_id" => 132,
            ],
            [
                "nome" => "AreiaBrancaII",
                "bloco_id" => 17,
                "regiao_id" => 133,
            ],
            [
                "nome" => "Capelao",
                "bloco_id" => 17,
                "regiao_id" => 133,
            ],
            [
                "nome" => "Ceasa",
                "bloco_id" => 17,
                "regiao_id" => 133,
            ],
            [
                "nome" => "CIA",
                "bloco_id" => 17,
                "regiao_id" => 134,
            ],
            [
                "nome" => "CiaI",
                "bloco_id" => 17,
                "regiao_id" => 134,
            ],
            [
                "nome" => "Pitanguinha",
                "bloco_id" => 17,
                "regiao_id" => 134,
            ],
            [
                "nome" => "PitanguinhaII",
                "bloco_id" => 17,
                "regiao_id" => 134,
            ],
            [
                "nome" => "SantoAmaro",
                "bloco_id" => 17,
                "regiao_id" => 135,
            ],
            [
                "nome" => "Núcleo-EntradadaPedra",
                "bloco_id" => 17,
                "regiao_id" => 135,
            ],
            [
                "nome" => "Núcleo-LamaBranca",
                "bloco_id" => 17,
                "regiao_id" => 135,
            ],
            [
                "nome" => "Núcleo-NovaPitanga",
                "bloco_id" => 17,
                "regiao_id" => 135,
            ],
            [
                "nome" => "Núcleo-Opalma",
                "bloco_id" => 17,
                "regiao_id" => 135,
            ],
            [
                "nome" => "Pilar",
                "bloco_id" => 17,
                "regiao_id" => 135,
            ],
            [
                "nome" => "Núcleo-RetirodeSantoAmaro",
                "bloco_id" => 17,
                "regiao_id" => 135,
            ],
            [
                "nome" => "SatoAmaroII",
                "bloco_id" => 17,
                "regiao_id" => 135,
            ],
            [
                "nome" => "Núcleo-SãoFrancisco",
                "bloco_id" => 17,
                "regiao_id" => 135,
            ],
            [
                "nome" => "Núcleo-SitioCamacari",
                "bloco_id" => 17,
                "regiao_id" => 135,
            ],
            [
                "nome" => "Saubara",
                "bloco_id" => 17,
                "regiao_id" => 136,
            ],
            [
                "nome" => "Acupe",
                "bloco_id" => 17,
                "regiao_id" => 136,
            ],
            [
                "nome" => "BomJesus",
                "bloco_id" => 17,
                "regiao_id" => 136,
            ],
            [
                "nome" => "Cabucu",
                "bloco_id" => 17,
                "regiao_id" => 136,
            ],
            [
                "nome" => "TancredoNeves",
                "bloco_id" => 18,
                "regiao_id" => 137,
            ],
            [
                "nome" => "Arvoredo",
                "bloco_id" => 18,
                "regiao_id" => 137,
            ],
            [
                "nome" => "Narandiba",
                "bloco_id" => 18,
                "regiao_id" => 137,
            ],
            [
                "nome" => "Saboeiro",
                "bloco_id" => 18,
                "regiao_id" => 137,
            ],
            [
                "nome" => "SaboeiroII",
                "bloco_id" => 18,
                "regiao_id" => 137,
            ],
            [
                "nome" => "Engomadeira",
                "bloco_id" => 18,
                "regiao_id" => 138,
            ],
            [
                "nome" => "Baixinha",
                "bloco_id" => 18,
                "regiao_id" => 138,
            ],
            [
                "nome" => "EstradadasBarreiras",
                "bloco_id" => 18,
                "regiao_id" => 139,
            ],
            [
                "nome" => "Sussuarana",
                "bloco_id" => 18,
                "regiao_id" => 140,
            ],
            [
                "nome" => "Areal",
                "bloco_id" => 18,
                "regiao_id" => 140,
            ],
            [
                "nome" => "MataEscura",
                "bloco_id" => 18,
                "regiao_id" => 140,
            ],
            [
                "nome" => "NovoHorizontedeSussuarana",
                "bloco_id" => 18,
                "regiao_id" => 140,
            ],
            [
                "nome" => "SantoInacio",
                "bloco_id" => 18,
                "regiao_id" => 140,
            ],
            [
                "nome" => "SussuaranaNova",
                "bloco_id" => 18,
                "regiao_id" => 140,
            ],
            [
                "nome" => "TeixeiradeFreitas",
                "bloco_id" => 19,
                "regiao_id" => 141,
            ],
            [
                "nome" => "Alcobaca",
                "bloco_id" => 19,
                "regiao_id" => 141,
            ],
            [
                "nome" => "Itabatam",
                "bloco_id" => 19,
                "regiao_id" => 141,
            ],
            [
                "nome" => "Itanhem",
                "bloco_id" => 19,
                "regiao_id" => 141,
            ],
            [
                "nome" => "Núcleo-Juerana",
                "bloco_id" => 19,
                "regiao_id" => 141,
            ],
            [
                "nome" => "MedeirosNeto",
                "bloco_id" => 19,
                "regiao_id" => 141,
            ],
            [
                "nome" => "Mucuri",
                "bloco_id" => 19,
                "regiao_id" => 141,
            ],
            [
                "nome" => "PostodaMata",
                "bloco_id" => 19,
                "regiao_id" => 141,
            ],
            [
                "nome" => "Núcleo-RanchoAlegre",
                "bloco_id" => 19,
                "regiao_id" => 141,
            ],
            [
                "nome" => "SãoLourenco",
                "bloco_id" => 19,
                "regiao_id" => 141,
            ],
            [
                "nome" => "BaianaoII",
                "bloco_id" => 19,
                "regiao_id" => 142,
            ],
            [
                "nome" => "CoroaVermelha",
                "bloco_id" => 19,
                "regiao_id" => 142,
            ],
            [
                "nome" => "Mirante",
                "bloco_id" => 19,
                "regiao_id" => 142,
            ],
            [
                "nome" => "Eunapolis",
                "bloco_id" => 19,
                "regiao_id" => 143,
            ],
            [
                "nome" => "Núcleo-Alecrim",
                "bloco_id" => 19,
                "regiao_id" => 143,
            ],
            [
                "nome" => "TrabEspecial-Barrolandia",
                "bloco_id" => 19,
                "regiao_id" => 143,
            ],
            [
                "nome" => "Guarantinga",
                "bloco_id" => 19,
                "regiao_id" => 143,
            ],
            [
                "nome" => "Itabela",
                "bloco_id" => 19,
                "regiao_id" => 143,
            ],
            [
                "nome" => "Núcleo-Itagimirim",
                "bloco_id" => 19,
                "regiao_id" => 143,
            ],
            [
                "nome" => "Núcleo-Itapebi",
                "bloco_id" => 19,
                "regiao_id" => 143,
            ],
            [
                "nome" => "JucaRosa",
                "bloco_id" => 19,
                "regiao_id" => 143,
            ],
            [
                "nome" => "Pequi",
                "bloco_id" => 19,
                "regiao_id" => 143,
            ],
            [
                "nome" => "SantaLucia",
                "bloco_id" => 19,
                "regiao_id" => 143,
            ],
            [
                "nome" => "Itamaraju",
                "bloco_id" => 19,
                "regiao_id" => 144,
            ],
            [
                "nome" => "Caravelas",
                "bloco_id" => 19,
                "regiao_id" => 144,
            ],
            [
                "nome" => "Prado",
                "bloco_id" => 19,
                "regiao_id" => 144,
            ],
            [
                "nome" => "Núcleo-VarzeaAlegre",
                "bloco_id" => 19,
                "regiao_id" => 144,
            ],
            [
                "nome" => "PortoSeguro",
                "bloco_id" => 19,
                "regiao_id" => 145,
            ],
            [
                "nome" => "ArraialdaAjuda",
                "bloco_id" => 19,
                "regiao_id" => 145,
            ],
            [
                "nome" => "Belmonte",
                "bloco_id" => 19,
                "regiao_id" => 145,
            ],
            [
                "nome" => "Cabralia",
                "bloco_id" => 19,
                "regiao_id" => 145,
            ],
            [
                "nome" => "TrabEspecial-Itaporanga",
                "bloco_id" => 19,
                "regiao_id" => 145,
            ],
            [
                "nome" => "Trancoso",
                "bloco_id" => 19,
                "regiao_id" => 145,
            ],
            [
                "nome" => "PracadaBiblia",
                "bloco_id" => 19,
                "regiao_id" => 146,
            ],
            [
                "nome" => "Núcleo-SantoAntonio",
                "bloco_id" => 19,
                "regiao_id" => 146,
            ],
            [
                "nome" => "VilasdoAtlântico",
                "bloco_id" => 20,
                "regiao_id" => 147,
            ],
            [
                "nome" => "Portao",
                "bloco_id" => 20,
                "regiao_id" => 147,
            ],
            [
                "nome" => "Itinga",
                "bloco_id" => 20,
                "regiao_id" => 148,
            ],
            [
                "nome" => "Taruma",
                "bloco_id" => 20,
                "regiao_id" => 148,
            ],
            [
                "nome" => "Jaua",
                "bloco_id" => 20,
                "regiao_id" => 149,
            ],
            [
                "nome" => "Arembepe",
                "bloco_id" => 20,
                "regiao_id" => 149,
            ],
            [
                "nome" => "LaurodeFreitas",
                "bloco_id" => 20,
                "regiao_id" => 150,
            ],
            [
                "nome" => "ParqueSantaRita",
                "bloco_id" => 20,
                "regiao_id" => 151,
            ],
            [
                "nome" => "AltodoItinga",
                "bloco_id" => 20,
                "regiao_id" => 151,
            ],
            [
                "nome" => "ParqueSãoPaulo",
                "bloco_id" => 20,
                "regiao_id" => 151,
            ],
            [
                "nome" => "VidaNova",
                "bloco_id" => 20,
                "regiao_id" => 152,
            ],
            [
                "nome" => "Caji",
                "bloco_id" => 20,
                "regiao_id" => 152,
            ],
            [
                "nome" => "ViladeAbrante",
                "bloco_id" => 20,
                "regiao_id" => 153,
            ],
            [
                "nome" => "Multirao",
                "bloco_id" => 20,
                "regiao_id" => 153,
            ],
            [
                "nome" => "ViladeAbranteII",
                "bloco_id" => 20,
                "regiao_id" => 153,
            ],

        ];
        DB::table('igrejas')->insert($igrejas);
    }
}
