<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--Bootstrap CDN-->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <!--custome css-->
    <link rel="stylesheet" href="/style/style.css" />
    <!--FontAwesome CDN-->
    <script
      src="https://kit.fontawesome.com/ff4d152faa.js"
      crossorigin="anonymous"
    ></script>
    <title>WriteUp</title>
  </head>
  <body>
    <!--logo and socials -->
    <header>
      <div class="container d-flex justify-content-between align-items-center">
        <div class="logo d-flex">
          <a href="#">
            <img
              src="/images/logo.png"
              alt=""
              class="img-fluid"
              style="width: 170px"
          /></a>
          <span>THE MAGAZINE</span>
        </div>
        <div class="socials">
          <ul>
            <li>
              <a href="#"><i class="fab fa-facebook-f"></i></a>
            </li>
            <li>
              <a href="#"><i class="fab fa-instagram"></i></a>
            </li>
            <li>
              <a href="#"><i class="fab fa-google-plus-g"></i></a>
            </li>
            <li>
              <a href="#"><i class="fab fa-twitter"></i></a>
            </li>
            <li>
              <a href="#"><i class="fab fa-pinterest-p"></i></a>
            </li>
            <li>
              <a href="#"><i class="fas fa-search"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </header>
    <!--menu and naviagtion -->
    <div class="menu-nav shadow">
      <div class="container">
        <div class="menu">
          <ul>
            <li>
              <a href="/">Home</a>
            </li>
            <li>
              <a href="#">Features</a>
            </li>
            <li>
              <a href="#">LIFESTYLE</a>
            </li>
            <li>
              <a href="#">tech</a>
            </li>
            <li>
              <a href="#">show</a>
            </li>
            <li>
              <a href="#">download</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="show-hide-menu-btn">
      <span class="bar"></span>
      <span class="bar"></span>
      <span class="bar"></span>
    </div>
    <!--main content-->
    <div class="container mt-5">
      <div class="row">
        <div class="col-12 col-md-8 mb-5">
            @yield('main-content')
        </div>

        <!--Right Column-->
        <div class="col-12 col-md-4 pt-4">
          <h5>Latest Posts</h5>
          <div class="line"></div>
          <!--beginning of random posts-->
          <div class="recent-posts mb-5">
            @for ($i = 0; $i < 3; $i++)
            <div class="post d-flex">
              <a href="/post/{{$posts[$i]->id}}"
                ><img
                  src="{{ URL::to('/')}}/images/{{$posts[$i]->image}}"
                  alt=""
                  height="70"
                  width="100"
                  class="rounded"
              /></a>
              <p>
                <a href="/post/{{$posts[$i]->id}}"
                  >{{ $posts[$i]->title}}</a
                >
              </p>
            </div>
            @endfor
          </div>
          <!--End of random posts-->

          <!--beginning of follow us-->
          <h5>Follow Us</h5>
          <div class="line"></div>
          <div class="socials-count mb-5">
            <div
              class="indivisual-count rounded d-flex align-items-center justify-content-between"
              style="background-color: #516eab"
            >
              <div class="count-logo"><i class="fab fa-facebook-f"></i></div>
              <div
                class="count-number d-flex justify-content-between"
                style="flex: auto"
              >
                <p>1113975 LIKES</p>
                <p><i class="fas fa-plus"></i></p>
              </div>
            </div>
            <div
              class="indivisual-count rounded d-flex align-items-center justify-content-between"
              style="background-color: #29c5f6"
            >
              <div class="count-logo"><i class="fab fa-twitter"></i></div>
              <div
                class="count-number d-flex justify-content-between"
                style="flex: auto"
              >
                <p>441 FOLLOWERS</p>
                <p><i class="fas fa-plus"></i></p>
              </div>
            </div>
            <div
              class="indivisual-count rounded d-flex align-items-center justify-content-between"
              style="background-color: #cd201f"
            >
              <div class="count-logo"><i class="fab fa-google-plus-g"></i></div>
              <div
                class="count-number d-flex justify-content-between"
                style="flex: auto"
              >
                <p>8465 SUBSCRIBERS</p>
                <p><i class="fas fa-plus"></i></p>
              </div>
            </div>
          </div>
          <!--end of follow us-->

          <!--start of recent comments-->
          <h5>Recent Comments</h5>
          <div class="line"></div>
          <div class="recent-comment mb-5">
            <div class="comments">
              <div class="comment d-flex" style="gap: 12px">
                <img
                  src="/images/comments-image.gif"
                  alt=""
                  height="60"
                  width="60"
                />
                <div class="comment-text">
                  <p>The Splash Lab</p>
                  <small
                    >"the splash lab usa designs and manufactures
                    innova..."</small
                  >
                </div>
              </div>
              <div class="comment d-flex" style="gap: 12px">
                <img
                  src="/images/comments-image.gif"
                  alt=""
                  height="60"
                  width="60"
                />
                <div class="comment-text">
                  <p>MR.RIUS</p>
                  <small>"https://sahihsahabathijrah.blogspot.com/" </small>
                </div>
              </div>
              <div class="comment d-flex" style="gap: 12px">
                <img
                  src="/images/comments-image.gif"
                  alt=""
                  height="60"
                  width="60"
                />
                <div class="comment-text">
                  <p>EE</p>
                  <small
                    >"hello bro,very helpful content, i really loved
                    itd..."</small
                  >
                </div>
              </div>
            </div>
          </div>
          <!--end of recent comments-->

          <!--beginning of follow by email-->
          <h5>Follow By E-mail</h5>
          <div class="line"></div>
          <div class="email-follow p-3 mb-5 rounded">
            <span
              >Enter your email address to subscribe to this blog and revieve
              notifactions to new posts by email.</span
            >
            <form action="#" method="#" class="p-2">
              <input
                type="text"
                class="form-control mb-2"
                placeholder="youremail@example.com"
              />
              <input
                type="submit"
                value="Subscribe"
                class="btn btn-sm btn-primary btn-block"
              />
            </form>
          </div>
          <!--end of follow by email-->
          <!--Start of popular posts-->
          <h5>Popular Posts</h5>
          <div class="line"></div>
          <!--beginning of random posts-->
          <div class="recent-posts mb-5">
            @for ($i = 3; $i < 6; $i++)
            <div class="post d-flex">
              <a href="/post/{{$posts[$i]->id}}"
                ><img
                  src="{{ URL::to('/')}}/images/{{$posts[$i]->image}}"
                  alt=""
                  height="70"
                  width="100"
                  class="rounded"
              /></a>
              <p>
                <a href="/post/{{$posts[$i]->id}}"
                  >{{ $posts[$i]->title}}</a
                >
              </p>
            </div>
            @endfor
          </div>
          <!--end  of popular posts-->
          <!--start of tags-->
          <h5>Tags</h5>
          <div class="line"></div>
          <div class="tags p-2">
            <a
              href="#"
              class="badge badge-primary p-2 mr1 mb-2"
              style="font-size: 0.9rem; font-weight: lighter"
              >Break</a
            >
            <a
              href="#"
              class="badge badge-primary p-2 mr1 mb-2"
              style="font-size: 0.9rem; font-weight: lighter"
              >Food</a
            >
            <a
              href="#"
              class="badge badge-primary p-2 mr1 mb-2"
              style="font-size: 0.9rem; font-weight: lighter"
              >Gadgets</a
            >
            <a
              href="#"
              class="badge badge-primary p-2 mr1 mb-2"
              style="font-size: 0.9rem; font-weight: lighter"
              >Ipad</a
            >
            <a
              href="#"
              class="badge badge-primary p-2 mr1 mb-2"
              style="font-size: 0.9rem; font-weight: lighter"
              >Mobile</a
            >
            <a
              href="#"
              class="badge badge-primary p-2 mr1 mb-2"
              style="font-size: 0.9rem; font-weight: lighter"
              >News</a
            >
            <a
              href="#"
              class="badge badge-primary p-2 mr1 mb-2"
              style="font-size: 0.9rem; font-weight: lighter"
              >Slider</a
            >
            <a
              href="#"
              class="badge badge-primary p-2 mr1 mb-2"
              style="font-size: 0.9rem; font-weight: lighter"
              >Tech</a
            >
            <a
              href="#"
              class="badge badge-primary p-2 mr1 mb-2"
              style="font-size: 0.9rem; font-weight: lighter"
              >Video</a
            >
            <a
              href="#"
              class="badge badge-primary p-2 mr1 mb-2"
              style="font-size: 0.9rem; font-weight: lighter"
              >Watch</a
            >
          </div>
          <!--end  of tags-->
        </div>
      </div>
    </div>
    <!--bottom posts-->
    <div class="container my-5">
      <div class="bottom-posts">
        <div class="row">
          <div class="col-12 col-md-4">
            <h5>Recent Posts</h5>
            <div class="line"></div>
            <div class="recent-posts mb-5">
                @for ($i = 0; $i < 3; $i++)
                <div class="post d-flex">
                  <a href="/post/{{$posts[$i]->id}}"
                    ><img
                      src="{{ URL::to('/')}}/images/{{$posts[$i]->image}}"
                      alt=""
                      height="70"
                      width="100"
                      class="rounded"
                  /></a>
                  <p>
                    <a href="/post/{{$posts[$i]->id}}"
                      >{{ $posts[$i]->title}}</a
                    >
                  </p>
                </div>
                @endfor
              </div>
          </div>
          <div class="col-12 col-md-4">
            <h5>Popular Posts</h5>
            <div class="line"></div>
            <!--beginning of random posts-->
            <div class="recent-posts mb-5">
                @for ($i = 3; $i < 6; $i++)
                <div class="post d-flex">
                  <a href="/post/{{$posts[$i]->id}}"
                    ><img
                      src="{{ URL::to('/')}}/images/{{$posts[$i]->image}}"
                      alt=""
                      height="70"
                      width="100"
                      class="rounded"
                  /></a>
                  <p>
                    <a href="/post/{{$posts[$i]->id}}"
                      >{{ $posts[$i]->title}}</a
                    >
                  </p>
                </div>
                @endfor
              </div>
          </div>
          <div class="col-12 col-md-4">
            <h5>Random Posts</h5>
            <div class="line"></div>
            <!--beginning of random posts-->
            <div class="recent-posts mb-5">
                @for ($i = 6; $i < 7; $i++)
                <div class="post d-flex">
                  <a href="/post/{{$posts[$i]->id}}"
                    ><img
                      src="{{ URL::to('/')}}/images/{{$posts[$i]->image}}"
                      alt=""
                      height="70"
                      width="100"
                      class="rounded"
                  /></a>
                  <p>
                    <a href="/post/{{$posts[$i]->id}}"
                      >{{ $posts[$i]->title}}</a
                    >
                  </p>
                </div>
                @endfor
              </div>
          </div>
        </div>
      </div>
    </div>
    <div class="codedBy">
        <span>Coded By <a href="#">Belal Wesam</a></span>
    </div>
    <!--Bootstrap CDN-->
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>
    <script>
      let menuBtn = document.querySelector(".show-hide-menu-btn");
      let menu = document.querySelector(".menu-nav");
      menuBtn.addEventListener("click", () => {
        menuBtn.classList.toggle("Xsign");
        menu.classList.toggle("show");
      });
    </script>
  </body>
</html>
