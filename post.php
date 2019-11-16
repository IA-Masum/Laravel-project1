<?php $current_page = "post"; ?>
<?php $title = "Post"?>
<?php 
require_once('header.php');
?>

<div class="bg-light py-3">
  <div class="container">
    <div class="row">
      <div class="col-md-9">
        <div>
          <h3 class="text-center my-4">Post Title</h3>
          <p class="text-justify bg-white p-3">
            <img src="assets/baby.jpg" class="m-2 mr-3" style="float: left;" alt="">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum illum aperiam distinctio quidem minus
            excepturi tenetur dolor accusamus quibusdam quis eius delectus voluptates nulla maxime in facilis voluptatum
            quo sapiente, tempore iste modi accusantium assumenda natus. A laboriosam laudantium omnis exercitationem.
            Officia, odio numquam cum fugiat voluptatum reprehenderit veniam facere earum impedit harum expedita eveniet
            quae in nemo hic et quo. Rem obcaecati aut facilis? Earum nesciunt unde reprehenderit delectus nam obcaecati
            iusto! Facere, harum beatae? Nam aliquid hic atque quisquam eveniet ab optio deserunt vel beatae quis?
            Ducimus odit quia porro minima iure sit inventore rerum error maxime! Veniam praesentium adipisci eveniet
            voluptas dolor tempora impedit nesciunt dolores non delectus atque quod voluptatem nobis laborum accusamus
            omnis repellat placeat, magnam pariatur ut, alias saepe, consequuntur quaerat facilis? Harum, tempore alias
            quisquam aliquid delectus dolores nobis. Dignissimos tenetur voluptatum minus. Maiores, quia! Veritatis,
            quasi eius. Quas omnis illum dolorem. Magni, sed natus placeat veniam voluptates aliquid consequuntur maxime
            eligendi distinctio quisquam, voluptatum vitae omnis quo unde quos temporibus aliquam culpa fugit velit!
            Dolorem nesciunt sequi quidem alias neque voluptatem illum labore ullam saepe. Officiis, deleniti quos
            accusantium sequi minus suscipit sint neque animi, sit perspiciatis similique ea officia magnam pariatur
            explicabo necessitatibus cumque nostrum nemo eaque libero tempora. Tempora esse amet nesciunt excepturi
            quaerat? Ab reprehenderit nam, enim vitae quibusdam tempora sint suscipit blanditiis recusandae odio
            consequuntur laboriosam, sit perferendis natus? Dolore similique harum praesentium voluptatibus, natus
            tenetur recusandae repudiandae aliquid alias explicabo cumque, vero voluptatum porro ea earum ipsum.
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ullam iste maiores quibusdam, dolorum ab rem rerum
            accusantium vero laudantium obcaecati quisquam labore itaque, voluptas aut doloribus mollitia, quos dolorem
            deserunt? Numquam deserunt dignissimos maiores debitis quae consequuntur odit nesciunt laboriosam cum
            fugiat! Exercitationem iste ab sunt aspernatur magni nemo voluptatibus amet, magnam ullam voluptas atque
            facilis. Similique, fugiat. Quidem exercitationem fugiat dolorum itaque numquam harum ex, incidunt
            consectetur adipisci nihil! Perspiciatis eveniet qui, dolore excepturi sapiente natus quos repellat
            recusandae aspernatur ducimus mollitia, alias sit exercitationem. Magnam vitae, est sed minima explicabo
            architecto eligendi laudantium amet velit odit sint magni dolores deleniti dicta. Exercitationem architecto
            numquam dicta. Ullam aliquid consectetur similique, asperiores iure officia ex dignissimos ipsam minima! In
            veritatis tempore asperiores dolore maiores omnis, magnam fugiat accusantium, optio unde eius officia
            similique dolores excepturi. Ad voluptas maxime quia inventore amet quasi et ea. Accusantium eveniet rem
            autem et iste voluptas dolorem ab non debitis minima vero nam reprehenderit quos ex molestias eligendi
            similique inventore voluptatum fugit error corrupti blanditiis, enim est facilis. Repudiandae tenetur esse
            ex. Officiis sed voluptas tenetur qui molestiae eum hic aspernatur perspiciatis, excepturi architecto soluta
            obcaecati eaque quae autem aliquam assumenda quibusdam saepe. A rerum quidem enim iste quasi eius, sapiente
            ipsa quo mollitia magni tempora quisquam atque praesentium ratione labore deleniti voluptatum inventore
            aliquam quam, tempore autem. Voluptates debitis, sapiente distinctio fugiat ipsam quidem dolorum ut harum,
            tempora, dolores impedit fuga? Molestias nemo qui doloremque quod explicabo accusantium eius sint,
            necessitatibus odio, eaque tempora.
          </p>
        </div>
        <div class="p-3">
          <h5>Comments</h5>
          <hr>
          <div class="bg-white p-3">
            <div id="cmnt-div">
              <div class="border border-secondary rounded p-2 m-1 bg-light">
                <h6 class="mb-0">IA Masum</h6>
                <small>Good.</small>
              </div>
              <div class="border border-secondary rounded p-2 m-1 bg-light">
                <h6 class="mb-0">Maruf</h6>
                <small>Awesome</small>
              </div>
            </div>
            <div class="p-2 pb-0">
              <div class="row">
                <div class="col-sm-9">
                  <textarea class="form-control mr-sm-2" id="comment" type="text" placeholder="Your Thought"
                    aria-label="Search"></textarea>
                </div>
                <div class="col-sm-3 mt-3">
                  <button id="cmnt-btn" class="btn btn-block btn-primary btn-sm my-2 my-sm-0">Comment</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php require_once("sidebar.php");?>
    </div>
  </div>
</div>

<script>
$(document).ready(function() {
  var cmntDiv = $('#cmnt-div');
  var comment = $('#comment');
  var cmntBtn = $('#cmnt-btn');

  cmntBtn.click(function() {

    if(!comment.val()){
      alert("Comment Box is Empty!!");
      return;
    }
    var div = $("<div></div>");
    var h6 = $("<h6></h6>");
    var small = $("<small></small>");

    div.addClass("border border-secondary rounded p-2 m-1 bg-light");
    h6.addClass("mb-0");
    h6.text("Imran");
    small.text(comment.val());

    div.append(h6);
    div.append(small);

    cmntDiv.append(div);
    comment.val("")
  });
});
</script>

<?php 
require_once('footer.php');
?>