<template>
  <div class="loading-wrapper">
    <svg
      id="el_sE73ymila"
      :height="height"
      preserveAspectRatio="xMidYMid meet"
      version="1.0"
      viewBox="0 0 600 600"
      xmlns="http://www.w3.org/2000/svg">
      <g id="el_byFg5ZWfUZ">
        <g
          id="el_FBZ1sHuuM9_an_4Ppu81qn8"
          data-animator-group="true"
          data-animator-type="0">
          <g
            id="el_FBZ1sHuuM9_an_s4hgiZhmt"
            data-animator-group="true"
            data-animator-type="2">
            <path
              id="el_FBZ1sHuuM9"
              d="M9052 4639c-74-27-144-49-158-49-31 0-86-50-135-121-21-32-44-61-50-65s-48-13-93-21c-44-7-108-22-141-33-33-10-139-44-236-74-170-54-179-58-268-126-160-121-285-168-594-225-483-89-538-105-762-210-55-26-118-53-140-60-31-10-39-17-38-33 2-14-30-46-110-114-62-52-146-126-187-165l-74-70-84 39c-183 86-415 227-565 343-60 47-82 57-185 85-79 22-122 39-133 53-14 17-32 21-118 27s-107 11-141 34c-22 14-62 31-89 37-39 8-53 17-72 46-38 58-51 62-112 31-28-14-97-41-152-58-62-19-207-84-380-170l-280-139-200 12-199 13-101-41c-127-51-284-144-890-530-985-626-1186-745-1645-975-199-100-282-137-473-209-60-23-137-56-173-73-55-27-63-34-58-52 4-12 8-22 9-24 6-7 167 21 513 89 529 104 527 103 1692 754 278 155 557 310 620 343 147 77 307 145 326 138 8-3 14-19 14-35 0-44-47-92-174-175-227-149-742-432-869-478-73-26-100-42-155-91l-66-60 175 7c95 4 203 11 239 16s200 57 364 115c165 58 300 104 302 103 1-2-9-52-22-112-14-60-23-110-21-112 2-3 44 18 93 46 49 27 110 57 135 65 57 19 95 56 171 167 33 48 69 90 81 94 33 10 174 151 220 219 178 264 404 421 687 478 41 9 136 21 210 28 252 23 395-13 710-175 107-55 227-116 267-136 40-19 73-38 73-42 0-18-68-81-148-135-48-33-168-106-267-163s-241-139-315-183c-307-183-541-264-990-346-295-53-609-99-1015-146-121-14-274-35-340-46s-183-29-261-39c-196-26-289-62-394-151l-35-30 50 6c74 8 391 31 905 65 769 51 961 73 1340 150 199 41 290 65 485 131 333 113 454 162 730 299 491 243 788 438 1139 746 392 344 447 387 557 438 92 42 158 56 257 55 135-2 133 4 53-131-87-147-126-195-193-235-29-18-161-79-293-136-354-153-418-187-513-267-95-81-154-153-208-253-22-39-61-98-88-131-58-73-103-160-111-213-3-21-2-65 2-98l8-60 103 123c57 68 120 133 141 146 20 13 69 64 109 114 106 132 148 166 307 242 134 64 207 95 590 245 233 92 375 162 475 235 48 36 199 176 350 326 314 312 353 337 401 257 12-21 58-95 101-165l79-126 72-22c328-97 419-130 362-130-9 0-30-7-47-16-34-18-128-102-128-115 0-11 146-54 247-73 45-9 180-24 300-35 262-24 983-74 989-68 2 2-1 17-7 34-13 38-92 76-315 153-138 47-156 56-218 109-45 40-82 63-114 71-26 7-83 32-127 55-47 25-138 59-220 83-77 22-171 51-209 64-81 27-81 27-89 176-5 111-6 111 118 53 106-50 179-100 316-217 61-51 116-94 122-94 7 0 111-18 232-39l220-38 198-92c291-134 647-272 852-331 321-91 331-97 468-292l48-67-38-11c-21-6-112-17-203-25-342-29-810-150-912-235-28-24-31-31-22-47 10-16 24-18 115-15 104 3 287-11 624-49 121-14 205-18 257-14l77 7 123-67c99-54 131-67 163-66 22 1 168-15 325-34 157-20 356-39 443-42 153-6 157-5 157 14 0 51-131 147-420 308-251 139-332 195-375 258-19 29-75 97-125 152-49 55-103 125-120 156-29 54-36 60-187 150-87 52-167 103-178 115-11 11-62 36-114 54-51 19-107 44-125 56-17 13-67 40-111 61-238 111-316 159-597 369-203 152-284 202-520 320-187 94-233 129-302 234-25 37-57 77-73 89-15 12-102 82-193 156s-167 134-170 134-65-22-138-50z" />
          </g>
        </g>
      </g>
    </svg>
  </div>
</template>

<script>
  export default {
    props: {
      color: {
        type: String,
        default: '#4a4a4a'
      },
      height: {
        type: Number,
        default: 30
      },
      styles: {
        type: String,
        default: ''
      },
      width: {
        type: String,
        default: '100px'
      }
    },
    computed: {
      length () {
        return document.querySelector('.path').getTotalLength();
      }
    }
  };
</script>

<style lang="scss" scoped>
  @-webkit-keyframes kf_el_FBZ1sHuuM9_an_s4hgiZhmt{
    0%, to {
      -webkit-transform: translate(14.737628936767578px,1720.9549560546875px) scale(.4,.4) translate(-14.737628936767578px,-1720.9549560546875px);
      transform: translate(14.737628936767578px,1720.9549560546875px) scale(.4,.4) translate(-14.737628936767578px,-1720.9549560546875px)
    }
  }

  @keyframes kf_el_FBZ1sHuuM9_an_s4hgiZhmt {
    0%, to {
      -webkit-transform: translate(14.737628936767578px,1720.9549560546875px) scale(.4,.4) translate(-14.737628936767578px,-1720.9549560546875px);
      transform: translate(14.737628936767578px,1720.9549560546875px) scale(.4,.4) translate(-14.737628936767578px,-1720.9549560546875px)
    }
  }

  @-webkit-keyframes kf_el_FBZ1sHuuM9_an_4Ppu81qn8{
    0%, to {
      -webkit-transform: translate(14.737628936767578px,1720.9549560546875px) translate(-14.737628936767578px,-1720.9549560546875px) translate(400px,1000px);
      transform: translate(14.737628936767578px,1720.9549560546875px) translate(-14.737628936767578px,-1720.9549560546875px) translate(400px,1000px)
    }
  }

  @keyframes kf_el_FBZ1sHuuM9_an_4Ppu81qn8 {
    0%, to {
      -webkit-transform:translate(14.737628936767578px,1720.9549560546875px) translate(-14.737628936767578px,-1720.9549560546875px) translate(400px,1000px);
      transform: translate(14.737628936767578px,1720.9549560546875px) translate(-14.737628936767578px,-1720.9549560546875px) translate(400px,1000px)
    }
  }

  @-webkit-keyframes kf_el_FBZ1sHuuM9_an_APA0KfExj {
    0%, to {
      opacity:1
    }
    50% {
      opacity:0
    }
  }

  @keyframes kf_el_FBZ1sHuuM9_an_APA0KfExj {
    0%, to {
      opacity:1
    }
    50% {
      opacity:0
    }
  }

  #el_sE73ymila * {
    -webkit-animation-duration:2s;
    animation-duration:2s;
    -webkit-animation-iteration-count:infinite;
    animation-iteration-count:infinite;
    -webkit-animation-timing-function:cubic-bezier(0,0,1,1);
    animation-timing-function:cubic-bezier(0,0,1,1)
  }

  #el_byFg5ZWfUZ {
    -webkit-transform:translate(0,640px) scale(.1,-.1);
    transform:translate(0,640px) scale(.1,-.1);
    fill:#000;
    stroke:none
  }

  #el_FBZ1sHuuM9_an_s4hgiZhmt {
    -webkit-transform:translate(14.737628936767578px,1720.9549560546875px) scale(.4,.4) translate(-14.737628936767578px,-1720.9549560546875px);
    transform:translate(14.737628936767578px,1720.9549560546875px) scale(.4,.4) translate(-14.737628936767578px,-1720.9549560546875px);
    -webkit-animation-name:kf_el_FBZ1sHuuM9_an_s4hgiZhmt;
    animation-name:kf_el_FBZ1sHuuM9_an_s4hgiZhmt
  }

  #el_FBZ1sHuuM9, #el_FBZ1sHuuM9_an_4Ppu81qn8, #el_FBZ1sHuuM9_an_s4hgiZhmt {
    -webkit-animation-fill-mode:backwards;
    animation-fill-mode:backwards;
    -webkit-animation-timing-function:cubic-bezier(0,0,1,1);
    animation-timing-function:cubic-bezier(0,0,1,1)
  }

  #el_FBZ1sHuuM9 {
    opacity:1;
    -webkit-animation-name:kf_el_FBZ1sHuuM9_an_APA0KfExj;
    animation-name:kf_el_FBZ1sHuuM9_an_APA0KfExj
  }

  #el_FBZ1sHuuM9_an_4Ppu81qn8 {
    -webkit-transform:translate(14.737628936767578px,1720.9549560546875px) translate(-14.737628936767578px,-1720.9549560546875px) translate(400px,1000px);
    transform:translate(14.737628936767578px,1720.9549560546875px) translate(-14.737628936767578px,-1720.9549560546875px) translate(400px,1000px);
    -webkit-animation-name:kf_el_FBZ1sHuuM9_an_4Ppu81qn8;
    animation-name:kf_el_FBZ1sHuuM9_an_4Ppu81qn8
  }

  .loading-wrapper {
    align-items: center;
    display: flex;
    height: 90vh;
    justify-content: center;
  }
</style>
