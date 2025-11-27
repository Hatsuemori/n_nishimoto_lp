<?php get_header(''); ?>
<!-- <div class="loading">
     <div class="loading-animation">
          <div class="loadingInner">
               <div class="mbS2">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo2.png" alt="ロゴ">
               </div>
               <p class="loadTitle text-center">
                    不動産に、安心という選択肢を。
               </p>
          </div>
     </div>
</div> -->

<section class="topFvImgCard">
     <div class="relative">
          <div class="topFvBtnWrap">
               <div class="relative">
                    <a href="<?php echo home_url(); ?>/#sec_form">
                         <div class="topFvBtn white"><sub>見積り依頼</sub>をする
                              <div class="topbtnImgWrap">
                                   <picture class="picture">
                                        <source media="(max-width: 767px)"
                                             srcset="<?php echo get_template_directory_uri(); ?>/img/topbtnImg_sp.svg">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/topbtnImg.svg">
                                   </picture>
                              </div>
                         </div>
                    </a>
               </div>
          </div>
          <div class="topFvWrap">
               <div class="topAwardBlock mbS3">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/award.png" alt="認定ビルダー/設計の専門家">
               </div>
               <div class="topFvTitleWrap flex justCenter mbM mbSpM3">
                    <h1 class="topFvTitle white">建物の品質だけでは、<br>良い工場は作れない</h1>
               </div>
               <div class="toplogoBlock">
                    <img class="logoImg" src="<?php echo get_template_directory_uri(); ?>/img/logo.jpg"
                         alt="<?php wp_title('', true); ?>"
                         alt="<?php wp_title('', true); ?><?php if (wp_title('', false)) { ?> | <?php } ?><?php bloginfo('name'); ?>">
               </div>
          </div>
          <div class="bgImg topFvImg"
               style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/topFv.jpg');">
          </div>
     </div>
</section>
<section id="sec_problem" class="topProblemCard">
     <div class="bgImg problem_backImg"
          style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/problem_back.jpg');">
          <div class="cnt cntS">
               <div class="topProblemInnerBlock">
                    <div class="text-center white mbS mbSpM2">
                         <h2 class="commonTitleJp mbS3 mbSpM3">
                              その打ち合わせ、<br>
                              <sub class="yellow">「担当者の持ち帰り」</sub>ばかりで<br class="sp">進んでいますか？
                         </h2>
                         <p class="commonSubText">打ち合わせのたびに、こんなフラストレーションを感じている担当者様が急増しています。</p>
                    </div>
                    <ul class="problemList flex flexWrap mbS3">
                         <li>
                              <div class="relative">
                                   <div class="problemNbBlock">
                                        <div class="problemNbBox text-center relative">
                                             <div class="problemNbWrap white">
                                                  <p class="problemNbText">お悩み</p>
                                                  <p class="problemNb">01</p>
                                             </div>
                                        </div>
                                   </div>
                                   <figure class="bgImg problemImg"
                                        style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/problem01.jpg');">
                                        <figcaption class="visually-hidden">話が通じない、伝わらない</figcaption>
                                   </figure>
                                   <div class="problemTextBox">
                                        <div class="text-center mbS2 mbSpS">
                                             <h3 class="problemTitle mainColor">話が通じない、<br class="pc3">伝わらない</h3>
                                        </div>
                                        <p class="commonText">生産ラインの話をしているのに、建築担当者は建物の話ばかり。こちらの意図を理解してもらうだけで一苦労だ…。</p>
                                   </div>
                              </div>
                         </li>
                         <li>
                              <div class="relative">
                                   <div class="problemNbBlock">
                                        <div class="problemNbBox text-center relative">
                                             <div class="problemNbWrap white">
                                                  <p class="problemNbText">お悩み</p>
                                                  <p class="problemNb">02</p>
                                             </div>
                                        </div>
                                   </div>
                                   <figure class="bgImg problemImg"
                                        style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/problem02.jpg');">
                                        <figcaption class="visually-hidden">「専門部署に確認します」で毎回中断</figcaption>
                                   </figure>
                                   <div class="problemTextBox">
                                        <div class="text-center mbS2 mbSpS">
                                             <h3 class="problemTitle mainColor">「専門部署に確認<br class="pc3">します」で毎回中断</h3>
                                        </div>
                                        <p class="commonText">設備の仕様について質問しても、担当者はその場で答えられない。「持ち帰って検討します」で、話が少しも前に進まない…。
                                        </p>
                                   </div>
                              </div>
                         </li>
                         <li>
                              <div class="relative">
                                   <div class="problemNbBlock">
                                        <div class="problemNbBox text-center relative">
                                             <div class="problemNbWrap white">
                                                  <p class="problemNbText">お悩み</p>
                                                  <p class="problemNb">03</p>
                                             </div>
                                        </div>
                                   </div>
                                   <figure class="bgImg problemImg"
                                        style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/problem03.jpg');">
                                        <figcaption class="visually-hidden">結局、責任の所在が曖昧に</figcaption>
                                   </figure>
                                   <div class="problemTextBox">
                                        <div class="text-center mbS2 mbSpS">
                                             <h3 class="problemTitle mainColor">結局、責任の所在が<br class="pc3">曖昧に</h3>
                                        </div>
                                        <p class="commonText">建築と設備の担当者が別だと、連携が取れずトラブルの元に。結局、施主であるこちらが調整する羽目になる…。
                                        </p>
                                   </div>
                              </div>
                         </li>
                    </ul>
                    <div class="arrowWrap">
                         <img src="<?php echo get_template_directory_uri(); ?>/img/yajirushi.svg">
                    </div>
                    <div class="solutionBox text-center">
                         <h2 class="commonTitleJp __sp yellow mbS3 mbSpS">そのストレス、<br class="sp">すべてなくせます。</h2>
                         <p class="solutionText white text-left-sp">西本システムなら、窓口一つで建築と設備の話がワンストップで完結。<br>
                              私たちが、お客様の事業を深く理解する「通訳」であり「実行者」です。</p>
                    </div>
               </div>
          </div>
     </div>
</section>

<section id="sec_merit" class="topMeritCard margin">
     <div class="cnt cntM">
          <div class="commonTitleBlock text-center relative mbS mbSpM2">
               <p class="commonTitleEn">Merit</p>
               <div class="commonTitleWrap">
                    <h2 class="commonTitleJp __xsp">
                         私たちの<sub class="mainColor">価値</sub>は、<br class="sp">2つの<sub class="mainColor">プロの視点</sub>を<sub
                              class="mainColor">融合</sub>させること。
                    </h2>
               </div>
          </div>
          <ul class="meritList flex flexWrap relative">
               <div class="meritImgWrap">
                    <picture class="picture">
                         <source media="(max-width: 767px)"
                              srcset="<?php echo get_template_directory_uri(); ?>/img/kakeru_sp.svg">
                         <img src="<?php echo get_template_directory_uri(); ?>/img/kakeru.svg">
                    </picture>
               </div>
               <li>
                    <div class="relative mbM3">
                         <div class="meritLogoWrap">
                              <img src="<?php echo get_template_directory_uri(); ?>/img/yokokawasystemLogo.png"
                                   alt="株式会社横河システム建築ロゴ">
                         </div>
                    </div>
                    <div class="meritBoxWrap text-center mbS3 mbSpM3">
                         <div class="meritBox"><span>建築数10,000件以上</span></div>
                    </div>
                    <h3 class="meritTitle text-center mainColor mbS">信頼の建築システム<br>
                         横河システム建築「YESS建築」
                    </h3>
                    <ul class="systemlist flex flexWrap">
                         <li>
                              <div class="flex flexPc flexTabNote">
                                   <div class="systemImgBlock">
                                        <figure class="bgImg meritImg"
                                             style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/merit01.jpg');">
                                             <figcaption class="visually-hidden">無柱大空間</figcaption>
                                        </figure>
                                   </div>
                                   <div class="systemInfoBlock">
                                        <h4 class="meritSubTitle mainColor mbS mbSpS3">無柱大空間</h4>
                                        <p class="commonText">最大60mの無柱空間が、生産ラインの自由なレイアウトと将来の変更に柔軟に対応します。
                                        </p>
                                   </div>
                              </div>
                         </li>
                         <li>
                              <div class="flex flexPc flexTabNote">
                                   <div class="systemImgBlock">
                                        <figure class="bgImg meritImg"
                                             style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/merit02.jpg');">
                                             <figcaption class="visually-hidden">高品質・高耐久</figcaption>
                                        </figure>
                                   </div>
                                   <div class="systemInfoBlock">
                                        <h4 class="meritSubTitle mainColor mbS mbSpS3">高品質・高耐久</h4>
                                        <p class="commonText">コンピュータ制御による一貫生産と緻密な構造計算が、安定した品質と高い耐震性を約束します。
                                        </p>
                                   </div>
                              </div>
                         </li>
                         <li>
                              <div class="flex flexPc flexTabNote">
                                   <div class="systemImgBlock">
                                        <figure class="bgImg meritImg"
                                             style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/merit03.jpg');">
                                             <figcaption class="visually-hidden">短工期・低コスト</figcaption>
                                        </figure>
                                   </div>
                                   <div class="systemInfoBlock">
                                        <h4 class="meritSubTitle mainColor mbS mbSpS3">短工期・低コスト</h4>
                                        <p class="commonText">徹底的に合理化された工法が、従来比で最大20%の工期短縮とコスト削減を実現します。
                                        </p>
                                   </div>
                              </div>
                         </li>
                    </ul>
               </li>
               <li>
                    <div class="relative mbM3">
                         <div class="meritLogoWrap">
                              <img src="<?php echo get_template_directory_uri(); ?>/img/nishimotosystemLogo.png"
                                   alt="西本システムロゴ">
                         </div>
                    </div>
                    <div class="meritBoxWrap text-center mbS3 mbSpM3">
                         <div class="meritBox"><span>創業28年　公共工事22年Aランク維持</span></div>
                    </div>
                    <h3 class="meritTitle text-center mainColor mbS">事業を動かす知見<br>生産設備への深い理解と設計力
                    </h3>
                    <ul class="systemlist flex flexWrap">
                         <li>
                              <div class="flex flexPc flexTabNote">
                                   <div class="systemImgBlock">
                                        <figure class="bgImg meritImg"
                                             style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/merit04.jpg');">
                                             <figcaption class="visually-hidden">生産プロセス設計</figcaption>
                                        </figure>
                                   </div>
                                   <div class="systemInfoBlock">
                                        <h4 class="meritSubTitle mainColor mbS mbSpS3">生産プロセス設計</h4>
                                        <p class="commonText">お客様の製造工程を深く理解し、原材料の搬入から出荷まで、最も効率的な動線を設計します。
                                        </p>
                                   </div>
                              </div>
                         </li>
                         <li>
                              <div class="flex flexPc flexTabNote">
                                   <div class="systemImgBlock">
                                        <figure class="bgImg meritImg"
                                             style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/merit05.jpg');">
                                             <figcaption class="visually-hidden">設備・ユーティリティ設計</figcaption>
                                        </figure>
                                   </div>
                                   <div class="systemInfoBlock">
                                        <h4 class="meritSubTitle mainColor mbS mbSpS3">設備・ユーティリティ設計</h4>
                                        <p class="commonText">機械の性能を100%引き出すための基礎、電源、配管計画を、建物の設計と同時に最適化します。
                                        </p>
                                   </div>
                              </div>
                         </li>
                         <li>
                              <div class="flex flexPc flexTabNote">
                                   <div class="systemImgBlock">
                                        <figure class="bgImg meritImg"
                                             style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/merit06.jpg');">
                                             <figcaption class="visually-hidden">法規制への知見</figcaption>
                                        </figure>
                                   </div>
                                   <div class="systemInfoBlock">
                                        <h4 class="meritSubTitle mainColor mbS mbSpS3">法規制への知見</h4>
                                        <p class="commonText">消防法やHACCP等、業種特有の法規制をクリアしたプランで、手戻りのない許認可取得を支援します。
                                        </p>
                                   </div>
                              </div>
                         </li>
                    </ul>
               </li>

          </ul>
     </div>
</section>
<?php get_template_part('parts/assets/contact'); ?>

<section id="sec_solution" class="topSolutionCard margin">
     <div class="cnt cntS">
          <div class="commonTitleBlock text-center relative">
               <p class="commonTitleEn">Solution</p>
               <div class="commonTitleWrap">
                    <h2 class="commonTitleJp __xsp">
                         <sub class="mainColor">お客様の事業</sub>と<sub class="mainColor">伴走</sub>する、<br class="sp">私たちの<sub
                              class="mainColor">ソリューション</sub>
                    </h2>
               </div>
          </div>
          <div class="commonSubTextWrap mbS">
               <p class="commonSubText text-center">ただ建てるだけではない。<br class="sp">私たちの仕事は、お客様の課題解決です。</p>
          </div>
          <ul class="solutionList flex flexWrap">
               <li>
                    <div class="topVideoWrap mbS2">
                         <iframe src="https://www.youtube.com/embed/DB95eKlIaF0" title="YouTube video player"
                              frameborder="0"
                              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                              allowfullscreen>
                         </iframe>
                    </div>
                    <h3 class="solutionTitle text-center text-left-sp mbS2">ハマコー機械株式会社 新工場</h3>
                    <ul class="solutionTableList flex flexWrap">
                         <li>
                              <table class="solutionTable">
                                   <tr>
                                        <th>竣工年</th>
                                        <td>2024年08月</td>
                                   </tr>
                                   <tr>
                                        <th>商品</th>
                                        <td>カスタム</td>
                                   </tr>
                              </table>
                         </li>
                         <li class="__second">
                              <table class="solutionTable">
                                   <tr>
                                        <th>面積</th>
                                        <td>759㎡</td>
                                   </tr>
                                   <tr>
                                        <th>施設用途</th>
                                        <td>工場</td>
                                   </tr>
                              </table>
                         </li>
                    </ul>
                    <ul class="subjectList flex flexWrap relative mbS matchHeight">
                         <li>
                              <h4 class="subjectTitle mbS">お客様の課題</h4>
                              <ul class="commonList flex flexWrap">
                                   <li><span>最新NC工作機械の性能を100%引き出す、高精度な設置環境の欠如。</span></li>
                                   <li><span>旧工場のレイアウトが原因で発生していた、非効率な作業動線。</span></li>
                              </ul>
                         </li>
                         <li>
                              <h4 class="subjectTitle mbS">私たちの提案</h4>
                              <ul class="commonList flex flexWrap">
                                   <li><span>【YESS建築 カスタム】で、機械レイアウトに完全最適化された建物を自由設計。</span></li>
                                   <li><span>【工場知見】を活かし、重量機械を支える精密な基礎設計と、生産性を最大化する動線をワンストップで構築した。</span></li>
                              </ul>
                         </li>
                         <div class="subjectListImgWrap">
                              <picture class="picture">
                                   <source media="(max-width: 959px)"
                                        srcset="<?php echo get_template_directory_uri(); ?>/img/yajirushi_b_sp.svg">
                                   <img src="<?php echo get_template_directory_uri(); ?>/img/yajirushi_b.svg">
                              </picture>

                         </div>
                    </ul>
                    <div class="subjectBox">
                         <h4 class="subjectTitle mbS3">導入後の成果</h4>
                         <p class="commonText">機械の性能を100%引き出す、高精度な生産環境が完成。作業効率も向上し、技術力をアピールできる「見せる工場」として事業価値の向上に貢献しました。
                         </p>
                    </div>
               </li>
               <li>
                    <div class="topVideoWrap mbS2">
                         <iframe src="https://www.youtube.com/embed/drdU_Fm3aus" title="YouTube video player"
                              frameborder="0"
                              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                              allowfullscreen>
                         </iframe>
                    </div>
                    <h3 class="solutionTitle text-center text-left-sp mbS2">ハバジット日本 株式会社　和歌山第3工場</h3>
                    <ul class="solutionTableList flex flexWrap">
                         <li>
                              <table class="solutionTable">
                                   <tr>
                                        <th>竣工年</th>
                                        <td>2024年08月</td>
                                   </tr>
                                   <tr>
                                        <th>商品</th>
                                        <td>カスタム</td>
                                   </tr>
                              </table>
                         </li>
                         <li class="__second">
                              <table class="solutionTable">
                                   <tr>
                                        <th>面積</th>
                                        <td>3917㎡</td>
                                   </tr>
                                   <tr>
                                        <th>施設用途</th>
                                        <td>工場</td>
                                   </tr>
                              </table>
                         </li>
                    </ul>
                    <ul class="subjectList flex flexWrap relative mbS matchHeight">
                         <li>
                              <h4 class="subjectTitle mbS">お客様の課題</h4>
                              <ul class="commonList flex flexWrap">
                                   <li><span>3,917㎡という大規模建築における、コストと工期への懸念。</span></li>
                                   <li><span>旧工場のレイアウトが原因で発生していた、非効率な作業動線。広大な空間での、生産フローの最適化という難題。</span></li>
                              </ul>
                         </li>
                         <li>
                              <h4 class="subjectTitle mbS">私たちの提案</h4>
                              <ul class="commonList flex flexWrap">
                                   <li><span>【YESS建築】により、大規模空間を低コスト・短工期で実現。</span></li>
                                   <li><span>【工場知見】に基づき、無駄な動きを排除する「一方通行の生産フロー」を設計。将来の拡張性も確保した。</span></li>
                              </ul>
                         </li>
                         <div class="subjectListImgWrap">
                              <picture class="picture">
                                   <source media="(max-width: 959px)"
                                        srcset="<?php echo get_template_directory_uri(); ?>/img/yajirushi_b_sp.svg">
                                   <img src="<?php echo get_template_directory_uri(); ?>/img/yajirushi_b.svg">
                              </picture>
                         </div>
                    </ul>
                    <div class="subjectBox">
                         <h4 class="subjectTitle mbS3">導入後の成果</h4>
                         <p class="commonText">
                              計画通りのコストと工期で、国内需要を支える大規模生産拠点が完成。最適化された生産フローはリードタイムを短縮し、企業の成長を加速させる戦略的投資となりました。
                         </p>
                    </div>
               </li>
          </ul>
     </div>
</section>
<section id="sec_philo" class="topPhiloCard">
     <div class="cntWide">
          <div class="flex flexPc">
               <div class="philoInfoBlock">
                    <div class="philoInfoBox">
                         <div class="commonTitleBlock relative mbM2 mbSpL5">
                              <p class="commonTitleEn">Philosophy</p>
                              <div class="commonTitleWrap">
                                   <h2 class="commonTitleJp __msp">私が<sub
                                             class="mainColor">「ただの箱は作らない」</sub><br>と決めている理由</h2>
                              </div>
                         </div>
                         <div class="philoInfoTextBox">
                              <p class="commonText __lh mbM3">
                                   長年、様々な工場の設備に携わる中で、数多くの「もったいない現場」を見てきました。<br>立派な建物なのに、動線が悪く生産性が低い。最新の機械なのに、性能を活かしきれていない。その原因は、いつも建築と設備の分断にありました。
                              </p>
                              <p class="commonText __lh">
                                   だからこそ私たちは、お客様の事業そのものを深く理解することから始めます。どんな製品を作り、どんな機械を使い、従業員がどう動くのか。その全てを設計図に落とし込み、信頼できる器「YESS建築」で形にする。<br>建物と設備、両方に責任を持つ。それが、お客様の未来に貢献する唯一の方法だと信じています。
                              </p>
                         </div>
                    </div>
               </div>
               <figure class="bgImg philoImg"
                    style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/philoImg.jpg');">
                    <figcaption class="visually-hidden"></figcaption>
               </figure>
          </div>
     </div>
</section>
<?php get_template_part('parts/assets/contact'); ?>

<section id="sec_flow" class="topFlowCard margin">
     <div class="cnt cntS">
          <div class="commonTitleBlock text-center relative mbS">
               <p class="commonTitleEn">Flow</p>
               <div class="commonTitleWrap">
                    <h2 class="commonTitleJp __xsp">
                         <sub class="mainColor">お問い合わせ</sub>から<sub class="mainColor">完成</sub>までの流れ
                    </h2>
               </div>
          </div>
          <ul class="flowList flex flexWrap">
               <li class="relative">
                    <div class="flowNbBoxWrap">
                         <div class="flowNbBox">
                         </div>
                    </div>
                    <div class="flowInnerBox">
                         <div class="text-center text-left-sp">
                              <h3 class="flowTitle mainColor mbS3 mbSpS1">お問い合わせ・ご相談</h3>
                              <p class="commonText">まずはお電話かフォームで、お客様の事業の夢や課題をお聞かせください。</p>
                         </div>
                    </div>
               </li>
               <li class="__blue relative">
                    <div class="flowNbBoxWrap">
                         <div class="flowNbBox">
                         </div>
                    </div>
                    <div class="flowInnerBox">
                         <div class="text-center text-left-sp">
                              <h3 class="flowTitle mainColorSub mbS3 mbSpS1">ヒアリング・現地調査</h3>
                              <p class="commonText">建築と設備のプロが伺い、事業内容や敷地状況を詳しく確認させていただきます。</p>
                         </div>
                    </div>
               </li>
               <li class="relative">
                    <div class="flowNbBoxWrap">
                         <div class="flowNbBox">
                         </div>
                    </div>
                    <div class="flowInnerBox">
                         <div class="text-center text-left-sp">
                              <h3 class="flowTitle mainColor mbS3 mbSpS1">プランニング・お見積もり（無料）</h3>
                              <p class="commonText">お客様の事業に最適なプランと、詳細なお見積もりを分かりやすくご提示します。</p>
                         </div>
                    </div>
               </li>
               <li class="__blue relative">
                    <div class="flowNbBoxWrap">
                         <div class="flowNbBox">
                         </div>
                    </div>
                    <div class="flowInnerBox">
                         <div class="text-center text-left-sp">
                              <h3 class="flowTitle mainColorSub mbS3 mbSpS1">ご契約・設計</h3>
                              <p class="commonText">ご提案内容にご納得いただけましたらご契約。稼働後の利益を生む実施設計を進めます。</p>
                         </div>
                    </div>
               </li>
               <li class="relative">
                    <div class="flowNbBoxWrap">
                         <div class="flowNbBox">
                         </div>
                    </div>
                    <div class="flowInnerBox">
                         <div class="text-center text-left-sp">
                              <h3 class="flowTitle mainColor mbS3 mbSpS1">施工</h3>
                              <p class="commonText">安全管理を徹底し、YESS建築の高品質な施工システムで迅速に建設を進めます。</p>
                         </div>
                    </div>
               </li>
               <li class="__blue relative">
                    <div class="flowNbBoxWrap">
                         <div class="flowNbBox">
                         </div>
                    </div>
                    <div class="flowInnerBox">
                         <div class="text-center text-left-sp">
                              <h3 class="flowTitle mainColorSub mbS3 mbSpS1">お引き渡し・アフターフォロー</h3>
                              <p class="commonText"> 完成後も、お客様の事業のパートナーとして末永くサポートさせていただきます。</p>
                         </div>
                    </div>
               </li>

          </ul>
     </div>
</section>
<section id="sec_faq" class="topFaqCard">
     <div class="cnt cntS">
          <div class="commonTitleBlock text-center relative mbS">
               <p class="commonTitleEn">FAQ</p>
               <div class="commonTitleWrap">
                    <h2 class="commonTitleJp">
                         よくある<sub class="mainColor">ご質問</sub>
                    </h2>
               </div>
          </div>
          <ul class="qaList flex flexWrap">
               <li class="__first">
                    <div class="openBtn __first">
                         <dt>Q. 新卒でも未経験から始められますか？</dt>
                    </div>
                    <div class="qaInner">
                         <dt>ご契約いただくまで、一切費用はかかりません。安心してご相談ください。
                         </dt>
                    </div>
               </li>
               <li>
                    <div class="openBtn">
                         <dt>Q. 土地探しから相談できますか?</dt>
                    </div>
                    <div class="qaInner">
                         <dt>ダミーダミーダミーダミーダミーダミーダミー
                         </dt>
                    </div>
               </li>
               <li>
                    <div class="openBtn">
                         <dt>Q. はい。提携不動産業者と連携し、事業に最適な土地探しからサポートいたします。</dt>
                    </div>
                    <div class="qaInner">
                         <dt>ダミーダミーダミーダミーダミーダミーダミー
                         </dt>
                    </div>
               </li>

          </ul>
     </div>
</section>
<section id="sec_form" class="topFormCard">
     <div class="cnt cntS">
          <div class="commonTitleBlock text-center relative">
               <p class="commonTitleEn">Contact</p>
               <div class="commonTitleWrap">
                    <h2 class="commonTitleJp __xsp white">
                         貴社の事業に、最適な「器」と「魂」を。
                    </h2>
               </div>
          </div>
          <div class="commonSubTextWrap mbS mbSpM2">
               <p class="commonSubText __small text-center text-left-sp white">工場建築は、事業の未来を決める重要な投資です。
                    建築の品質、設備の性能、そして事業の成長性。<br class="pc">そのどれも妥協せず、最高の答えを私たちと一緒に見つけませんか。<br
                         class="pc3">まずはお客様の事業への想いと、工場の理想をお聞かせください。
               </p>
          </div>

          <div class="contactForm" data-aos="fade-up">
               <?php the_content(); ?>
          </div>
     </div>
</section>
<?php get_footer(); ?>