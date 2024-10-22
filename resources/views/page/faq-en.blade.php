@extends('layout.app-en')

@section('content')

<div class="page-header min-vh-80" style="background-image: url('{{ asset('assets/img/kww/IMG_0224.PNG') }}')">
    <span class="mask bg-gradient-dark opacity-6"></span>
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="text-center">
                    <h1 class="text-white">Kampung Warna Warni</h1>
                    <h3 class="text-white">Jodipan</h3>
                </div>
            </div>
        </div>
    </div>
  </div>

  <div class="card card-body shadow-xl mx-3 mx-md-4 mt-n6">
  <div class="container">
    <div class="section text-center">
      <h2>FAQs</h2>
    </div>
    <div class="faqs">
      <div class="accordion">
        <div class="accordion-item">
          <button id="accordion-button-1" aria-expanded="false"><span class="accordion-title">Can I bring my pet to Jodipan?</span><span class="icon" aria-hidden="true"></span></button>
          <div class="accordion-content">
            <p>Yes, pets are allowed in Jodipan Colorful Tourism Village, but please ensure they are on a leash and that you clean up after them to maintain the village's cleanliness.</p>
          </div>
        </div>
        <div class="accordion-item">
          <button id="accordion-button-2" aria-expanded="false"><span class="accordion-title">Are there any hidden spots or lesser-known attractions in Jodipan?</span><span class="icon" aria-hidden="true"></span></button>
          <div class="accordion-content">
            <p>Absolutely! Beyond the main photo spots, explore the narrow alleys where you can find unique murals and local art that aren’t as crowded.</p>
          </div>
        </div>
        <div class="accordion-item">
          <button id="accordion-button-3" aria-expanded="false"><span class="accordion-title">What’s the best time to take photos?</span><span class="icon" aria-hidden="true"></span></button>
          <div class="accordion-content">
            <p>The best time to take photos is during the golden hour, which is the first hour after sunrise and the last hour before sunset. The lighting is softer and creates a magical effect on the colorful walls.</p>
          </div>
        </div>
        <div class="accordion-item">
          <button id="accordion-button-4" aria-expanded="false"><span class="accordion-title">Can I find any unique local snacks or drinks?</span><span class="icon" aria-hidden="true"></span></button>
          <div class="accordion-content">
            <p>Yes, try the local specialty, "Es Dawet," a traditional Indonesian cold dessert made from rice flour, served with coconut milk and palm sugar. Also, look for "Rujak Cingur," a local fruit and vegetable salad with a tangy peanut sauce.</p>
          </div>
        </div>
        <div class="accordion-item">
          <button id="accordion-button-5" aria-expanded="false"><span class="accordion-title">Are there any local stories or legends associated with Jodipan?</span><span class="icon" aria-hidden="true"></span></button>
          <div class="accordion-content">
            <p>Locals believe that the transformation of Jodipan has brought good fortune to the community, turning it from a neglected area into a vibrant tourist spot that has uplifted the spirits and economy of its residents.</p>
          </div>
        </div>
        <div class="accordion-item">
          <button id="accordion-button-1" aria-expanded="false"><span class="accordion-title">Is there any eco-friendly initiative in Jodipan?</span><span class="icon" aria-hidden="true"></span></button>
          <div class="accordion-content">
            <p>Yes, Jodipan has a community-driven recycling program. Residents create art and crafts from recycled materials, which are then sold to visitors. This initiative helps keep the village clean and promotes sustainability.</p>
          </div>
        </div>
        <div class="accordion-item">
          <button id="accordion-button-2" aria-expanded="false"><span class="accordion-title">Can I participate in any local activities or workshops?</span><span class="icon" aria-hidden="true"></span></button>
          <div class="accordion-content">
            <p>Yes, Jodipan offers occasional workshops on traditional Indonesian arts and crafts. Check with local guides or community centers for schedules and availability.</p>
          </div>
        </div>
        <div class="accordion-item">
          <button id="accordion-button-3" aria-expanded="false"><span class="accordion-title">What’s the vibe like at night in Jodipan?</span><span class="icon" aria-hidden="true"></span></button>
          <div class="accordion-content">
            <p>While Jodipan is more commonly visited during the day, at night it transforms into a tranquil and serene place. Some areas are lit up, providing a different but equally charming experience. However, it’s best to visit before dark as most attractions close by 6:00 PM.</p>
          </div>
        </div>
        <div class="accordion-item">
          <button id="accordion-button-4" aria-expanded="false"><span class="accordion-title">Is there a unique souvenir I should look out for?</span><span class="icon" aria-hidden="true"></span></button>
          <div class="accordion-content">
            <p>Look for hand-painted miniature replicas of Jodipan houses made by local artisans. They make for a unique and colorful keepsake that captures the essence of the village.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>

@endsection
