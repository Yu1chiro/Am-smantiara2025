// Kumpulan data
let dataset = [
  {
    name: "Kertiyasa",
    thumbnail: "https://zjm2wcf3fn.ucarecd.net/7e0434a7-8e93-42df-b554-286b62fb7bbf/25.png",
    studyProgram: "Pendidikan Sejarah",
    division: "Bendahara 1"
  },
  {
    name: "Anindya",
    thumbnail: "https://zjm2wcf3fn.ucarecd.net/cb7eb35c-187e-40df-8295-fddf260b7b08/7.png",
    studyProgram: "Pendidikan Bahasa Jepang",
    division: "Bendahara 2"
  },
  {
    name: "Bayu",
    thumbnail: "https://zjm2wcf3fn.ucarecd.net/2b812918-5e18-4a3b-8f60-bf0ef14e8ce7/35.png",
    studyProgram: "PKO",
    division: "Humas"
  },
  {
    name: "Tasya",
    thumbnail: "https://zjm2wcf3fn.ucarecd.net/67758a14-048d-4582-9ee9-b6f7c40dc7a9/11.png",
    studyProgram: "Pendidikan Sosiologi",
    division: "Humas"
  },
  {
    name: "Ernanda",
    thumbnail: "https://zjm2wcf3fn.ucarecd.net/de6abacd-f413-40a3-8f88-acf50640506c/5.png",
    studyProgram: "Pendidikan Biologi",
    division: "Humas"
  },
  {
    name: "Irene",
    thumbnail: "https://zjm2wcf3fn.ucarecd.net/38fa2d35-5cbe-4b88-85b3-a0cf1c5245b3/15.png",
    studyProgram: "Pendidikan Biologi",
    division: "Humas"
  },
  {
    name: "Winda",
    thumbnail: "https://zjm2wcf3fn.ucarecd.net/43514fdf-84bc-4824-b97e-1f44146b97b5/9.png",
    studyProgram: "Pendidikan Sejarah",
    division: "Humas"
  },
  {
    name: "Septa Gangga",
    thumbnail: "https://zjm2wcf3fn.ucarecd.net/8dc029d1-5715-4d29-9c8b-cd7e4fd5c2e9/20.png",
    studyProgram: "Pendidikan Fisika",
    division: "Humas"
  },
  {
    name: "Firdaus",
    thumbnail: "https://zjm2wcf3fn.ucarecd.net/e875243c-047c-43f0-a255-1cf000cd1c64/21.png",
    studyProgram: "Pendidikan Sosiologi",
    division: "PDD"
  },
  {
    name: "Bagas",
    thumbnail: "https://zjm2wcf3fn.ucarecd.net/e0d82621-e733-4f33-9486-f86b37a62222/29.png",
    studyProgram: "Pendidikan Ekonomi",
    division: "PDD"
  },
  {
    name: "Erawan",
    thumbnail: "https://zjm2wcf3fn.ucarecd.net/ee5f31bd-0bfd-432d-b3ec-c97f6aacf087/16.png",
    studyProgram: "Pendidikan Bahasa Jepang",
    division: "PDD"
  },
  {
    name: "Bernadet",
    thumbnail: "https://zjm2wcf3fn.ucarecd.net/e4945fc1-6c46-4634-9a2d-30c181263d1e/4.png",
    studyProgram: "Pendidikan Biologi",
    division: "PDD"
  },
  {
    name: "Herawati",
    thumbnail: "https://zjm2wcf3fn.ucarecd.net/5c179db0-3f5e-4401-8387-01a83db87d7b/18.png",
    studyProgram: "Pendidikan Fisika",
    division: "PDD"
  },
  {
    name: "Aprilia",
    thumbnail: "https://zjm2wcf3fn.ucarecd.net/31178769-91e6-47c8-adc9-63b61681300b/22.png",
    studyProgram: "Pendidikan Sosiologi",
    division: "PDD"
  },
  {
    name: "Anggi",
    thumbnail: "https://zjm2wcf3fn.ucarecd.net/9aa3f437-bc0e-4ffe-a7ed-bcd9b36341d8/3.png",
    studyProgram: "Pendidikan Ekonomi",
    division: "Acara"
  },
  {
    name: "Sri Mustya",
    thumbnail: "https://zjm2wcf3fn.ucarecd.net/ef348f1e-11af-493c-bc33-57d204b12ef6/32.png",
    studyProgram: "Pendidikan Ekonomi",
    division: ""
  },
  {
    name: "Dila",
    thumbnail: "https://zjm2wcf3fn.ucarecd.net/ffa3a7b9-62e7-4a88-b84d-d8bb1fb601da/17.png",
    studyProgram: "Pendidikan Biologi",
    division: "Acara"
  },
  {
    name: "Wiweka",
    thumbnail: "https://zjm2wcf3fn.ucarecd.net/8c642e6a-3c45-4774-ab4b-3f8cbd63d2c6/8.png",
    studyProgram: "Pendidikan Sejaarah",
    division: "Acara"
  },
  {
    name: "Yemima",
    thumbnail: "https://zjm2wcf3fn.ucarecd.net/34b945a5-3db4-49f3-b7a4-620277fdd995/26.png",
    studyProgram: "Pendidikan Sejarah",
    division: "Acara"
  },
  {
    name: "Utari",
    thumbnail: "https://zjm2wcf3fn.ucarecd.net/699320f5-6f85-4b79-b36c-9a06a5a56612/10.png",
    studyProgram: "Pendidikan Fisika",
    division: "Acara"
  },
  {
    name: "Indah",
    thumbnail: "https://zjm2wcf3fn.ucarecd.net/859ed950-4cd7-433e-a1d9-79cdc5531904/23.png",
    studyProgram: "Pendidikan Fisika",
    division: "Kerohanian"
  },
  {
    name: "Ade Mulia",
    thumbnail: "https://zjm2wcf3fn.ucarecd.net/6d46fedd-fa17-4f99-bc07-58b355906c73/2.png",
    studyProgram: "Pendidikan Ekonomi ",
    division: "Kerohanian"
  },
  {
    name: "Devi",
    thumbnail: "https://zjm2wcf3fn.ucarecd.net/cf1b0654-41b5-422f-abaf-995be789d932/31.png",
    studyProgram: "Pendidikan Ekonomi",
    division: "Kerohanian"
  },
  {
    name: "Mangku",
    thumbnail: "https://zjm2wcf3fn.ucarecd.net/9960c955-a694-4100-b9f9-b72112c25aef/33.png",
    studyProgram: "Pendidikan Sosiologi",
    division: "Kerohanian"
  },
  {
    name: "Sugik",
    thumbnail: "https://zjm2wcf3fn.ucarecd.net/ffa3a7b9-62e7-4a88-b84d-d8bb1fb601da/17.png",
    studyProgram: "Pendidikan Sejarah",
    division: "Kerohanian"
  },
  {
    name: "Saras",
    thumbnail: "https://zjm2wcf3fn.ucarecd.net/320ef920-82b3-49ab-aca4-9b97ef65fdce/19.png",
    studyProgram: "Pendidikan Ekonomi",
    division: "Kerohanian"
  },
  {
    name: "Marco",
    thumbnail: "https://zjm2wcf3fn.ucarecd.net/9aa3f437-bc0e-4ffe-a7ed-bcd9b36341d8/34.png",
    studyProgram: "PJKR ",
    division: "Perlengkapan"
  },
  {
    name: "Sudarma",
    thumbnail: "https://zjm2wcf3fn.ucarecd.net/27a40740-ae9d-4941-9433-65f6c5e2aafe/12.png",
    studyProgram: "Pendidikan Bahasa Jepang ",
    division: "Perlengkapan"
  },
  {
    name: "Nova",
    thumbnail: "https://zjm2wcf3fn.ucarecd.net/bf3e7b70-92a9-4a27-adba-499ae500ab3a/",
    studyProgram: "Pendidikan ",
    division: "Perlengkapan"
  },
  {
    name: "Hendra",
    thumbnail: "https://zjm2wcf3fn.ucarecd.net/a5d0fe45-8da1-4539-beef-6990b170dedc/27.png",
    studyProgram: "PJKR ",
    division: "Perlengkapan"
  },
  {
    name: "Yogi",
    thumbnail: "https://zjm2wcf3fn.ucarecd.net/a5e7f6c6-dda5-4b83-8677-4fe0e0524de2/",
    studyProgram: "Pendidikan ",
    division: "Perlengkapan"
  },
  {
    name: "Effrandi",
    thumbnail: "https://zjm2wcf3fn.ucarecd.net/17af0404-6afc-4919-99ff-1f0bb990e1eb/6.png",
    studyProgram: "PJKR ",
    division: "Perlengkapan"
  },
  {
    name: "Yodo",
    thumbnail: "https://zjm2wcf3fn.ucarecd.net/9aa3f437-bc0e-4ffe-a7ed-bcd9b36341d8/34.png",
    studyProgram: "PKO",
    division: "Perlengkapan"
  }
];


// Function untuk isi form berdasarkan index data
// Mapping key dataset -> id input form
const fieldMap = {
  name: "name",
  thumbnail: "thumbnail",
  studyProgram: "studyProgram",
  division: "division"
};

// Function untuk isi form berdasarkan index
function isiForm(index) {
  let data = dataset[index];
  if (!data) {
    console.error("Data tidak ditemukan!");
    return;
  }

  Object.keys(fieldMap).forEach(key => {
    let el = document.getElementById(fieldMap[key]);
    if (el && data[key] !== undefined) {
      el.value = data[key];
      // trigger event biar dianggap user input
      el.dispatchEvent(new Event("input", { bubbles: true }));
    }
  });

  // submit form
  document.getElementById("division-form").requestSubmit();
  console.log("Terkirim:", data.name);
}

// Loop otomatis submit semua data
let i = 0;
function submitAll() {
  if (i >= dataset.length) {
    console.log("✅ Semua data sudah terkirim");
    return;
  }
  isiForm(i);
  i++;
  setTimeout(submitAll, 2000); // jeda 2 detik antar submit
}

// Jalankan
submitAll();

