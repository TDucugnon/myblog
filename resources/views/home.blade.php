@extends('base')

@section('content')
<div class="container-fluid">
<div class="row " >
    <div class="col-sm-12">
        <div class="mx-auto p-4 border-bottom" style="width: 100%;background-image: url('image/row_bg.jpg'); position: initial; background-repeat: no-repeat; padding-top: 150px; padding-bottom: 0px; background-position: 50% -15.025px; margin-top: 5px;">
            <p class="d-flex justify-content-xl-center texttaille mx-auto " style="width: 1150px;"> Le projet "J'irai en stage chez toi" a pour objectif de permettre aux étudiant.e.s sages-femmes d'échanger des logements afin de rendre les lieux de stages plus accessibles et diversifiés.
            En effet, la formation en maïeutique demande de nombreux stages et les CHU de référence ne sont pas toujours aptes à accueillir tout.e.s les étudiant.e.s. De plus, ces stages à l’extérieur permettent de découvrir des pratiques et des protocoles différents de la formation de référence.
            Cependant, les revenus des étudiant.e.s étant limités et les périodes de stages relativement courtes, trouver un logement s’avère être parfois une tâche difficile.
            C’est pourquoi l’ANESF propose le projet “J’irai en stage chez toi”, reposant sur un principe d’entraide et de solidarité entre étudiant.e.s sages-femmes.</p> <br><br>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-2 bg-primary"> 
       
    </div>

    <div class="col-sm-8"> 
        <div class="d-flex justify-content-xl-center p-3 border-bottom text-rose">
            <h2> Recherche par région </h2>
        </div>
        <div class="d-flex justify-content-xl-center p-4 border-bottom">
           
            <img style="position: relative; right: 15px;"src="{{ asset('image/region3.webp') }}" alt="La France et ses région" usemap='#reg'>
            <map name='reg'>
                <area target="" alt="Bretagne" title="" href="{{ url('test/Bretagne') }}" coords="95,148,89,118,83,117,76,120,71,122,64,121,55,121,47,119,41,122,33,125,28,132,45,139,42,153,40,158,35,160,34,154,54,161,55,168,67,171,75,174,85,177,89,182,97,186,104,189,113,193,125,189,133,183,148,181,155,179,161,168,162,159,163,150,163,143,153,140,141,135,126,136,114,131,101,129,96,123,93,130" shape="poly">
                <area target="" alt="Normandie" title="" href="{{ url('test/Normandie') }}" coords="210,118,272,60,279,72,279,88,277,99,273,111,268,117,263,130,243,133,239,141,239,149,237,158,229,160,223,154,219,150,212,149,207,148,203,144,193,144,180,146,174,141,168,140,159,140,153,139,153,130,153,99,148,88,148,79,156,72,191,97,203,100,214,97,226,97,265,67,263,65,265,67,248,70,234,73,221,83,247,82,229,80,216,103,256,75" shape="poly">
                <area target="" alt="Haut-De-France" title="" href="{{ url('test/Haut-de-France') }}" coords="321,76,288,10,311,4,338,32,350,40,357,45,338,25,368,50,371,62,370,79,363,94,355,100,351,108,345,120,345,129,336,118,330,118,325,111,317,115,308,114,299,112,288,108,285,101,281,91,281,81,280,72,277,62,275,55,279,40,279,26,281,18,287,6" shape="poly">
                <area target="" alt="grand est" title="" href="{{ url('test/Grand Est') }}" coords="492,175,515,152,521,130,500,122,476,118,463,106,448,101,434,99,423,98,415,90,407,82,401,77,393,74,386,72,378,77,373,88,368,96,362,108,356,116,352,126,347,135,347,141,345,155,350,168,355,177,363,182,372,185,394,184,400,188,402,197,413,206,425,198,447,183,460,184,465,189,479,197,489,205,493,215,502,196,506,178,507,169,516,152,453,183" shape="poly">
                <area target="" alt="Ile de France" title="" href="{{ url('test/Ile-de-France') }}" coords="302,112,322,119,332,121,338,127,339,137,337,149,332,153,327,156,318,162,313,167,307,167,323,169,295,158,286,155,281,146,276,139,272,126,270,119,286,111,277,109,298,110" shape="poly">
                <area target="" alt="Pays de la Loire" title="" href="{{ url('test/Pays de la Loire') }}" coords="157,196,128,253,145,265,172,267,166,233,200,221,212,200,227,190,233,178,234,163,219,156,213,150,198,145,186,145,176,148,171,147,156,181,129,189,118,195,111,203,122,205,123,219,123,232,130,248,132,254" shape="poly">
                <area target="" alt="centre-val-de-loire" title="" href="{{ url('test/Centre-Val de Loire') }}" coords="266,204,264,135,278,151,290,163,299,168,305,171,314,176,323,179,320,187,314,195,317,205,318,219,318,229,320,238,320,248,311,256,300,261,295,265,281,267,274,269,259,269,250,269,246,259,241,250,236,244,232,235,227,229,219,230,212,225,205,216,213,201,225,193,234,190,237,178,240,171,245,152,249,136,265,134" shape="poly">
                <area target="" alt="Bourgogne-Franche-Comté" title="" href="{{ url('test/Bourgogne-Franche-Comté') }}" coords="389,242,388,187,416,209,442,191,461,193,472,197,481,209,478,222,469,238,456,252,448,261,437,273,435,282,424,284,415,277,407,272,395,282,393,287,358,284,349,263,339,254,323,246,323,234,324,220,322,198,327,167,337,163,342,163,337,163,359,184,390,188" shape="poly">
                <area target="" alt="Nouvelle-Aquitaine" title="" href="{{ url('test/Nouvelle-Aquitaine') }}" coords="171,341,125,433,130,449,135,460,145,463,153,469,160,471,182,454,171,433,184,409,201,408,216,407,229,403,231,385,242,371,255,358,268,354,280,359,287,345,294,336,295,324,294,316,293,308,300,299,293,286,289,281,280,276,268,276,253,277,242,267,231,247,219,242,209,233,199,230,187,232,175,236,174,249,178,257,173,272,160,273,160,290,152,285,153,276,157,296,154,306,157,321,163,328,169,341,172,344,139,402,129,425,136,429,144,380,142,350,147,335,150,324,171,341,164,349" shape="poly">
                <area target="" alt="Auvergne-Rhone-alpes" title="" href="{{ url('test/Auvergne-Rhone-Alpes') }}" coords="385,337,372,295,380,291,405,280,413,281,419,286,426,291,438,293,444,295,456,295,466,280,472,287,474,301,474,316,483,334,481,346,468,354,456,357,450,357,449,366,434,375,424,382,419,393,417,400,417,412,398,405,386,404,378,404,364,398,348,371,338,365,331,361,318,368,311,365,296,366,293,354,286,373,277,362,286,355,286,345,297,341,301,327,299,317,299,310,303,301,304,294,302,284,299,274,312,264,317,258,327,261,345,266,330,260,356,276,373,302" shape="poly">
                <area target="" alt="Occitanie" title="" href="{{ url('test/Occitanie') }}" coords="282,432,290,377,306,366,312,379,324,368,332,372,349,375,352,383,355,391,352,403,368,403,378,405,384,425,377,434,371,442,365,446,350,450,336,453,324,461,317,464,313,470,310,481,306,497,308,505,299,511,288,512,274,511,265,509,260,502,255,496,221,485,202,482,187,482,174,477,172,469,182,460,186,444,180,435,178,427,187,419,194,415,213,413,226,408,226,400,233,393,237,387,243,381,246,374,250,366,254,361,268,364,287,381,291,389" shape="poly">
                <area target="" alt="Provence-Alpes-Cote-D'Azur" title="" href="{{ url('test/Provence-Alpes-Côte d’Azur') }}" coords="451,433,422,398,428,383,441,371,453,370,462,362,468,366,479,376,475,385,475,398,476,410,488,414,493,418,500,419,507,421,503,435,489,441,483,448,473,454,463,463,454,473,438,471,426,466,418,465,410,458,396,455,390,453,385,451,382,444,387,433,389,426,393,413,389,405,399,407,421,418,429,407" shape="poly">
                <area target="" alt="Corse" title="" href="{{ url('test/Corse') }}" coords="505,561,501,532,515,512,518,534,520,549,518,562,512,582,509,596,501,589,496,580,492,570,489,563,489,553,490,539,502,532" shape="poly">

                <area target="" alt="Guyane" title="" href="{{ url('test/Guyane') }}" coords="54,591,43" shape="circle">
                <area target="" alt="Reunion" title="" href="{{ url('test/Reunion') }}" coords="158,592,148,568,133,575,128,588,134,601,142,607,156,612,172,614,182,609,180,599,174,592,171,585,169,577,166,570,150,567" shape="poly">
                <area target="" alt="Martinique" title="" href="{{ url('test/Martinique') }}" coords="233,583,218,560,215,581,223,593,232,598,237,602,228,612,245,612,261,612,255,596,244,584,241,576,226,562,213,567" shape="poly">
                <area target="" alt="Guadeloupe" title="" href="{{ url('test/Guadeloupe') }}" coords="316,591,346,579,334,569,328,561,331,594,353,586,325,572,298,586,298,608,306,621,316,613,317,606,323,596,338,583" shape="poly">
                <area target="" alt="Mayotte" title="" href="{{ url('test/Mayotte') }}" coords="411,572,413,591,429,578,403,557,394,566,402,577,406,583,406,595,423,586,425,628,397,622,426,587,417,629,423,586,411,631" shape="poly">
            </map>
        </div>
 
    </div>
    <div class="col-sm-2 bg-primary">
       
    </div>
</div>

<div class="row">
    <div class="col-12">
    <p class="d-flex justify-content-xl-center p-5" style="background-color: black;background-image: url('image/row_bg2.jpg'); position: initial;;background-position: center top;background-repeat: no-repeat;background-attachment: scroll;background-size: cover;padding-top:0px;padding-bottom:270px;"><a href="{{ route ('file.download.index') }}" class="lead  border border-primary p-3">Télécharger la charte JESCT</a></p>
    </div>
</div>

<div class="row">
    <div class="col-12">
            <h3 class="d-flex justify-content-xl-center p-4 border-bottom "> <u> Dernière Annonces  </u></h3>
    </div>
</div>    
<div class="row m-3">
    <div class="col-12 d-flex justify-content-center">
        <button class="btn btn-primary" onclick="HideFunction()">Afficher les offres </button>
    </div>
</div>
<div class="row p-4 text-center displaynone" id="offerID">
    <div class="col-12">
        @foreach ($lastoffer as $offers)
        <div class="border border-primary d-inline-flex justify-content-around w-25 text-center">         
            <span class=" d-flex p-3 justify-content-xl-center"><a href=" {{ route('offer', $offers->slug) }}"> {{ $offers->title }} </a></span> 
            <span class=" d-flex p-3 justify-content-xl-center"> Créer le : {{ $offers->created_at->format('d/m/Y') }} par : {{ $offers->User->name }} </span>
        </div>
        @endforeach
    </div>
</div>


</div>

<script>
    function HideFunction() {
      var div = document.getElementById("offerID");
      if (div.style.display === "none") {
        div.style.display = "block";
        document.getElementById("offerID").classList.add('animationtest');
      } else {
        div.style.display = "none";
      }
    }
    </script>
@endsection    
