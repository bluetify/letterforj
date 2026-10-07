<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Letter Layout Landscape</title>
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      background-color: #2b2825;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      padding: 20px;
      font-family: 'Georgia', 'Times New Roman', serif;
    }

    /* Container Utama dengan Background Gambar */
    .card-container {
      position: relative;
      width: 100%;
      max-width: 960px;
      aspect-ratio: 16 / 9; /* Menjaga proporsi landscape */
      background-image: url('dist/images/cl.jpeg'); /* Ganti dengan nama file gambar Anda */
      background-size: cover;
      background-position: center;
      box-shadow: 0 15px 35px rgba(0, 0, 0, 0.5);
      border-radius: 4px;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 12% 8% 15% 8%; /* Memberi ruang di atas (bulan) dan bawah (bunga) */
    }

    /* Container Teks 2 Kolom di Tengah */
    .content-wrapper {
      width: 100%;
      height: 100%;
      display: grid;
      grid-template-columns: 1fr 1fr; /* Membagi teks menjadi 2 kolom */
      gap: 5%;
      color: #2e241c; /* Warna teks gelap transparan/estetik */
      font-size: clamp(0.65rem, 1.2vw, 0.9rem); /* Responsif menyesuaikan layar */
      line-height: 1.45;
      letter-spacing: 0.2px;
      opacity: 0.88;
      overflow: hidden;
    }

    .column {
      display: flex;
      flex-direction: column;
      justify-content: flex-start;
      /* padding-top: 10px; */
    }

    .column p {
      margin-bottom: 8px;
    }

    .p2 {
        padding-left: 70px;
      }
    

    /* Responsif untuk layar HP kecil */
    @media (max-width: 600px) {
      .card-container {
        background-image: url('dist/images/coklat.jpeg');
        aspect-ratio: auto;
        min-height: 100%;
        padding: 20% 8% 25% 8%;
      }
      .content-wrapper {
        grid-template-columns: 1fr;
        gap: 20px;
      }
      .p1 {
        padding-top: 70px;
      }
      
    }
  </style>
</head>
<body>

  <div class="card-container">
    <div class="content-wrapper">
      
      <!-- Kolom Kiri -->
      <div class="column">
        <p class="p1" style="font-size: 10pt; color: white">
          <!-- I think I've reached the most desperate part of me<br>
          the part that keeps reaching for you<br>
          even when I don't know if you're reaching back.<br>
          I'm sorry if my messages ever feel like a burden<br>
          I never meant to make you feel obligated<br>
          to answer me, to keep talking, or to carry the weight of how much I care.<br>
          I just genuinely don't know what I'm supposed to do with you.<br>
          I'm clueless.<br>
          I keep trying to read between the lines,<br>
          trying to figure out what you mean,<br>
          trying to guess how much of this is real<br>
          and how much of it exists only in my head.<br>
          And most of the time,<br>
          I guess wrong. -->

          I think I’ve reached the most desperate part of me— <br>
            the part that keeps reaching for you <br>
            even when I don’t know if you’re reaching back. <br>

            I’m sorry if my messages ever feel like a burden. <br>
            I just genuinely don’t know what I’m supposed to do with you. <br>
            I keep trying to read between the lines, <br>
            trying to figure out what you mean. <br>

            But, I’m clueless.
        </p>
      </div>

      <!-- Kolom Kanan -->
      <div class="column">
        <p style="font-size: 10pt; color: white">
          <!-- I'm scared of looking too eager.<br>
          Scared of seeming delusional.<br>
          Scared that I'm reading warmth into something<br>
          that was never meant to mean anything.<br>
          Sometimes I wonder<br>
          if I'm the only one who gets happy when we talk.<br>
          If I'm the only one who waits for your messages,<br>
          the only one who notices when you're gone,<br>
          the only one who feels like every little conversation<br>
          means more than it probably does.<br>
          I hate not knowing.<br>
          I hate having to guess.<br>
          Because I don't know how to ask you<br>
          without making myself even more vulnerable:<br>
          is this something you feel too,<br>
          or am I the only one<br>
          who keeps mistaking silence<br>
          for something worth holding onto? -->
            <!-- Sometimes I wonder <br>
            if I’m the only one who gets happy when we talk, <br>
            the only one who waits, <br>
            the only one who thinks it means something. <br>

            And God, I hate not knowing <br>
            whether I’m wanted, <br>
            or merely tolerated. <br>

            So tell me, <br>
            is this something you feel too, <br>
            or am I the only one <br>
            holding onto something <br>
            that was never really there? <br> -->

            Sometimes I get you wrong. <br>
            I read too much into your words, <br>
            and somehow I’m always left wondering <br>
            what you really mean. <br>

            You know how badly I want <br>
            to be a part of your world. <br>

            But every time I try to get closer, <br>
            it feels like you take another step away. <br>

            And I don’t know what to do anymore. <br>
            So tell me— <br>
            what am I supposed to do now? <br>
        </p>
      </div>

    </div>
  </div>

</body>
</html>