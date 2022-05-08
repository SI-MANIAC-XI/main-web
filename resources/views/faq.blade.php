@extends('layouts.mainweb')

@section('title')
    FAQ
@endsection

@section('style')
    <link rel="stylesheet" href="{{ asset('../mainweb/css/faq.css') }}">
@endsection

@section('content')
    <h2 class="d-flex justify-content-center my-5 fs-1 mb-4 myTitle text-align-center padding-title">FREQUENTLY ASKED QUESTIONS</h2>
    <div class="container mt-5">
    <div class="accordion" id="accordionPanelsStayOpenExample">
    <div class="accordion-item faq-radialGradient">
        <h2 class="accordion-header" id="headingOne">
        <button class="accordion-button collapsed color-title-faq faq-radialGradient-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            Question 1
        </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
        <div class="accordion-body color-inside-faq faq-radialGradient-inside">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo tempore, voluptatum illo deserunt, sit expedita nam ad eveniet dolorum quis, in aperiam esse animi consequuntur perspiciatis libero ea doloremque accusantium.
        </div>
        </div>
    </div>
    <br>
    <div class="accordion-item faq-radialGradient">
        <h2 class="accordion-header" id="headingTwo">
        <button class="accordion-button collapsed color-title-faq faq-radialGradient-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            Question 2
        </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
        <div class="accordion-body color-inside-faq faq-radialGradient-inside">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorem soluta ipsam ea ut ad optio maiores illo corrupti minus magni omnis doloremque velit doloribus, ducimus consequuntur nobis delectus. Dignissimos, eius!
        </div>
        </div>
    </div>
    <br>
    <div class="accordion-item faq-radialGradient">
        <h2 class="accordion-header" id="headingThree">
        <button class="accordion-button collapsed color-title-faq faq-radialGradient-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            Question 3
        </button>
        </h2>
        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
        <div class="accordion-body color-inside-faq faq-radialGradient-inside">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Culpa, laboriosam impedit veritatis reiciendis, error repudiandae fugiat voluptas saepe sequi adipisci numquam eius ex harum perspiciatis? Optio veniam est nostrum pariatur!
        </div>
        </div>
    </div>
    <br>
    <div class="accordion-item faq-radialGradient">
        <h2 class="accordion-header" id="headingFour">
        <button class="accordion-button collapsed color-title-faq faq-radialGradient-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
            Question 4
        </button>
        </h2>
        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
        <div class="accordion-body color-inside-faq faq-radialGradient-inside">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorem soluta ipsam ea ut ad optio maiores illo corrupti minus magni omnis doloremque velit doloribus, ducimus consequuntur nobis delectus. Dignissimos, eius!
        </div>
        </div>
    </div>
    <br>
    <div class="accordion-item faq-radialGradient">
        <h2 class="accordion-header" id="headingFive">
        <button class="accordion-button collapsed color-title-faq faq-radialGradient-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
            Question 5
        </button>
        </h2>
        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
        <div class="accordion-body color-inside-faq faq-radialGradient-inside">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorem soluta ipsam ea ut ad optio maiores illo corrupti minus magni omnis doloremque velit doloribus, ducimus consequuntur nobis delectus. Dignissimos, eius!
        </div>
        </div>
    </div>
    <br>
    <div class="accordion-item faq-radialGradient">
        <h2 class="accordion-header" id="headingFive">
        <button class="accordion-button collapsed color-title-faq faq-radialGradient-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
            Question 6
        </button>
        </h2>
        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
        <div class="accordion-body color-inside-faq faq-radialGradient-inside">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorem soluta ipsam ea ut ad optio maiores illo corrupti minus magni omnis doloremque velit doloribus, ducimus consequuntur nobis delectus. Dignissimos, eius!
        </div>
        </div>
    </div>
    <br>
    <div class="accordion-item faq-radialGradient">
        <h2 class="accordion-header" id="headingSeven">
        <button class="accordion-button collapsed color-title-faq faq-radialGradient-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
            Question 7
        </button>
        </h2>
        <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
        <div class="accordion-body color-inside-faq faq-radialGradient-inside">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorem soluta ipsam ea ut ad optio maiores illo corrupti minus magni omnis doloremque velit doloribus, ducimus consequuntur nobis delectus. Dignissimos, eius!
        </div>
        </div>
    </div>
    <br>
    <div class="accordion-item faq-radialGradient">
        <h2 class="accordion-header" id="headingEight">
        <button class="accordion-button collapsed color-title-faq faq-radialGradient-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
            Question 8
        </button>
        </h2>
        <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
        <div class="accordion-body color-inside-faq faq-radialGradient-inside">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorem soluta ipsam ea ut ad optio maiores illo corrupti minus magni omnis doloremque velit doloribus, ducimus consequuntur nobis delectus. Dignissimos, eius!
        </div>
        </div>
    </div>
    <br>
    </div>
    </div>
@endsection