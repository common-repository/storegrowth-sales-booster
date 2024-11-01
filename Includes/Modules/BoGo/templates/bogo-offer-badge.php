<?php if ( ! empty( $offer_badge_url ) ) : ?>
	<span class="bogo-badge-tooltip bogo-badge-image"
		data-tooltip="<?php echo esc_attr( is_shop() ? $shop_page_msg : $product_page_msg ); ?>">
		<img src="<?php echo esc_url( $offer_badge_url ); ?>" alt="BOGO Badge" />
	</span>
<?php elseif ( ! empty( $offer_badge ) ) : ?>
	<div class='bogo-badge-image bogo-badge-tooltip default-icon'
		data-tooltip='<?php echo esc_attr( is_shop() ? $shop_page_msg : $product_page_msg ); ?>'>
		<?php if ( 'bogo-icons-1' === $offer_badge ) : ?>
			<svg xmlns="http://www.w3.org/2000/svg" width="47" height="46" viewBox="0 0 47 46" fill="none">
				<rect x="23.5462" y="0.0293961" width="32.4421" height="32.4421" rx="4" transform="rotate(45 23.5462 0.0293961)"
					fill="#EE262D" />
				<path
					d="M2.33298 28.5206C2.13302 28.1874 2.37308 27.7634 2.76172 27.7634H44.3306C44.7193 27.7634 44.9593 28.1874 44.7594 28.5206L42.7149 31.9281C42.6199 32.0864 42.6199 32.2842 42.7149 32.4426L44.7594 35.85C44.9593 36.1833 44.7193 36.6073 44.3306 36.6073H2.76173C2.37308 36.6073 2.13302 36.1833 2.33298 35.85L4.37745 32.4426C4.47246 32.2842 4.47246 32.0864 4.37745 31.9281L2.33298 28.5206Z"
					fill="#FFDC0D" />
				<path d="M26.6353 30.6539V29.9859H30.1449V30.6539H28.7853V34.3847H27.9949V30.6539H26.6353Z" fill="#EE262D" />
				<path d="M23.2847 34.3847V29.9859H26.1026V30.6539H24.0815V31.8481H25.9093V32.5161H24.0815V34.3847H23.2847Z"
					fill="#EE262D" />
				<path d="M22.4218 29.9859V34.3847H21.6249V29.9859H22.4218Z" fill="#EE262D" />
				<path
					d="M20.006 31.3906C19.9702 31.2747 19.9208 31.1708 19.8578 31.0792C19.7962 30.9861 19.7218 30.9067 19.6344 30.8408C19.5485 30.7749 19.4497 30.7255 19.338 30.6926C19.2263 30.6582 19.1046 30.641 18.9729 30.641C18.7366 30.641 18.5261 30.7005 18.3414 30.8193C18.1567 30.9382 18.0114 31.1128 17.9054 31.3434C17.8009 31.5725 17.7486 31.8517 17.7486 32.181C17.7486 32.5132 17.8009 32.7946 17.9054 33.0251C18.0099 33.2557 18.1553 33.4311 18.3414 33.5514C18.5276 33.6702 18.7438 33.7296 18.9901 33.7296C19.2134 33.7296 19.4067 33.6867 19.57 33.6008C19.7347 33.5149 19.8614 33.3931 19.9502 33.2356C20.0389 33.0767 20.0833 32.8905 20.0833 32.6772L20.2637 32.7051H19.0695V32.0822H20.8544V32.6106C20.8544 32.9872 20.7742 33.313 20.6138 33.5879C20.4535 33.8628 20.233 34.0747 19.9523 34.2236C19.6716 34.3711 19.3495 34.4449 18.9858 34.4449C18.5805 34.4449 18.2247 34.3539 17.9183 34.1721C17.6133 33.9888 17.3749 33.7289 17.2031 33.3924C17.0327 33.0545 16.9475 32.6536 16.9475 32.1896C16.9475 31.8345 16.9976 31.5174 17.0978 31.2381C17.1995 30.9589 17.3412 30.7219 17.5231 30.5272C17.7049 30.331 17.9183 30.1821 18.1631 30.0804C18.408 29.9774 18.6743 29.9258 18.9621 29.9258C19.2056 29.9258 19.4325 29.9616 19.643 30.0332C19.8535 30.1034 20.0404 30.2036 20.2036 30.3339C20.3683 30.4642 20.5036 30.6188 20.6095 30.7978C20.7155 30.9768 20.7849 31.1744 20.8179 31.3906H20.006Z"
					fill="#EE262D" />
				<path
					d="M30.8315 23.391V15.6727H35.8699V16.8447H32.2348V18.9401H35.6089V20.1122H32.2348V22.2189H35.9001V23.391H30.8315Z"
					fill="white" />
				<path
					d="M24.3613 23.391V15.6727H29.3997V16.8447H25.7647V18.9401H29.1387V20.1122H25.7647V22.2189H29.43V23.391H24.3613Z"
					fill="white" />
				<path
					d="M17.4335 23.391V15.6727H20.3385C20.9337 15.6727 21.433 15.7757 21.8364 15.9817C22.2424 16.1877 22.5488 16.4767 22.7556 16.8485C22.9649 17.2178 23.0696 17.6487 23.0696 18.1412C23.0696 18.6361 22.9637 19.0658 22.7518 19.4301C22.5425 19.7919 22.2336 20.072 21.8251 20.2705C21.4166 20.4665 20.9148 20.5644 20.3196 20.5644H18.2505V19.4037H20.1305C20.4785 19.4037 20.7634 19.3559 20.9854 19.2605C21.2073 19.1625 21.3712 19.0205 21.4771 18.8346C21.5855 18.6462 21.6397 18.415 21.6397 18.1412C21.6397 17.8673 21.5855 17.6336 21.4771 17.4402C21.3687 17.2442 21.2035 17.096 20.9816 16.9955C20.7597 16.8925 20.4734 16.841 20.1229 16.841H18.8368V23.391H17.4335ZM21.4355 19.8936L23.3533 23.391H21.7873L19.9035 19.8936H21.4355Z"
					fill="white" />
				<path d="M11.1922 23.391V15.6727H16.155V16.8447H12.5955V18.9401H15.8145V20.1122H12.5955V23.391H11.1922Z"
					fill="white" />
			</svg>
		<?php endif; ?>

		<?php if ( 'bogo-icons-2' === $offer_badge ) : ?>
			<svg xmlns="http://www.w3.org/2000/svg" width="41" height="41" viewBox="0 0 41 41" fill="none">
				<rect x="0.486168" y="0.969395" width="40" height="40" rx="4" fill="#EE262D" />
				<rect x="4.36939" y="5.1502" width="32.3082" height="32.2285" rx="1.5" stroke="white" />
				<path d="M33.4862 23.304V31.2724H32.1573V24.7086H32.1143L30.3986 25.8992V24.5763L32.2217 23.304H33.4862Z"
					fill="white" />
				<path d="M21.0911 24.514V23.304H26.9439V24.514H24.6765V31.2724H23.3584V24.514H21.0911Z" fill="white" />
				<path
					d="M15.2866 31.2724V23.304H20.0577V24.514H16.6155V26.6773H19.8105V27.8874H16.6155V30.0623H20.0863V31.2724H15.2866Z"
					fill="white" />
				<path
					d="M12.5868 25.8486C12.5271 25.6385 12.4447 25.4504 12.3396 25.2844C12.2369 25.1158 12.1128 24.9718 11.9671 24.8525C11.8238 24.7332 11.6591 24.6437 11.4728 24.5841C11.2865 24.5218 11.0836 24.4907 10.8639 24.4907C10.4699 24.4907 10.1189 24.5983 9.81081 24.8136C9.50277 25.0289 9.2604 25.3454 9.08369 25.763C8.90937 26.178 8.82221 26.6838 8.82221 27.2804C8.82221 27.8822 8.90937 28.3919 9.08369 28.8095C9.25801 29.2271 9.50038 29.5449 9.81081 29.7627C10.1212 29.978 10.4818 30.0857 10.8925 30.0857C11.2651 30.0857 11.5874 30.0079 11.8597 29.8522C12.1343 29.6966 12.3456 29.4761 12.4936 29.1908C12.6417 28.9029 12.7157 28.5657 12.7157 28.1792L13.0166 28.2298H11.0251V27.1014H14.0016V28.0586C14.0016 28.7408 13.8679 29.3309 13.6004 29.8289C13.333 30.3269 12.9653 30.7108 12.4972 30.9806C12.0292 31.2477 11.4919 31.3813 10.8854 31.3813C10.2096 31.3813 9.6162 31.2166 9.10518 30.8872C8.59655 30.5552 8.19896 30.0844 7.91241 29.4748C7.62825 28.8627 7.48617 28.1364 7.48617 27.296C7.48617 26.6527 7.56974 26.0781 7.7369 25.5723C7.90644 25.0665 8.14285 24.6372 8.44611 24.2845C8.74938 23.9291 9.10518 23.6593 9.51352 23.4752C9.92185 23.2884 10.366 23.195 10.846 23.195C11.2519 23.195 11.6304 23.2599 11.9814 23.3896C12.3325 23.5167 12.6441 23.6983 12.9163 23.9343C13.1909 24.1703 13.4166 24.4505 13.5933 24.7747C13.77 25.0989 13.8858 25.4569 13.9407 25.8486H12.5868Z"
					fill="white" />
				<path d="M33.4862 10.2854V18.0908H32.1845V11.6612H32.1424L30.4617 12.8275V11.5317L32.2476 10.2854H33.4862Z"
					fill="white" />
				<path
					d="M20.7348 10.2854H22.205L23.9628 13.7384H24.033L25.7908 10.2854H27.2609L24.647 15.179V18.0908H23.3488V15.179L20.7348 10.2854Z"
					fill="white" />
				<path
					d="M18.5095 10.2854H19.8112V15.3848C19.8112 15.9438 19.6896 16.4355 19.4463 16.8598C19.2054 17.2841 18.8662 17.6157 18.4288 17.8546C17.9914 18.0908 17.4803 18.209 16.8955 18.209C16.3084 18.209 15.7961 18.0908 15.3587 17.8546C14.9213 17.6157 14.5821 17.2841 14.3412 16.8598C14.1003 16.4355 13.9798 15.9438 13.9798 15.3848V10.2854H15.2815V15.2667C15.2815 15.5919 15.347 15.8816 15.478 16.1357C15.6114 16.3898 15.7985 16.5892 16.0394 16.734C16.2803 16.8763 16.5657 16.9475 16.8955 16.9475C17.2253 16.9475 17.5107 16.8763 17.7516 16.734C17.9949 16.5892 18.182 16.3898 18.313 16.1357C18.444 15.8816 18.5095 15.5919 18.5095 15.2667V10.2854Z"
					fill="white" />
				<path
					d="M7.48617 18.0908V10.2854H10.237C10.7562 10.2854 11.1878 10.3743 11.5316 10.5522C11.8778 10.7275 12.1363 10.9676 12.3071 11.2725C12.4802 11.5774 12.5667 11.9229 12.5667 12.3092C12.5667 12.6268 12.5106 12.8986 12.3983 13.1248C12.286 13.3484 12.1351 13.53 11.9457 13.6698C11.7562 13.8095 11.5445 13.9099 11.3106 13.9709V14.0471C11.5656 14.0623 11.81 14.1475 12.0439 14.3024C12.2802 14.4549 12.4731 14.6709 12.6228 14.9504C12.7725 15.2299 12.8474 15.5678 12.8474 15.9642C12.8474 16.3682 12.7573 16.7315 12.5772 17.0542C12.3971 17.3743 12.1258 17.6271 11.7632 17.8126C11.4007 17.9981 10.9445 18.0908 10.3948 18.0908H7.48617ZM8.78788 16.9094H10.1878C10.6603 16.9094 11.0007 16.8115 11.2089 16.6159C11.4194 16.4177 11.5246 16.1636 11.5246 15.8536C11.5246 15.6224 11.472 15.4141 11.3667 15.2286C11.2615 15.0406 11.1118 14.8932 10.9176 14.7865C10.7235 14.6772 10.4919 14.6226 10.2229 14.6226H8.78788V16.9094ZM8.78788 13.605H10.0756C10.3001 13.605 10.5024 13.5605 10.6826 13.4716C10.8627 13.3801 11.0042 13.2518 11.1071 13.0867C11.2124 12.919 11.265 12.7208 11.265 12.4921C11.265 12.1897 11.1667 11.9407 10.9703 11.7451C10.7761 11.5494 10.4872 11.4516 10.1036 11.4516H8.78788V13.605Z"
					fill="white" />
			</svg>
		<?php endif; ?>

		<?php if ( 'bogo-icons-3' === $offer_badge ) : ?>
			<svg xmlns="http://www.w3.org/2000/svg" width="37" height="42" viewBox="0 0 37 42" fill="none">
				<path
					d="M0.0750427 3.29939C0.0750427 1.64254 1.41819 0.299393 3.07504 0.299393H33.5461C35.203 0.299393 36.5461 1.64254 36.5461 3.29939V27.8671C36.5461 29.6234 35.6246 31.251 34.1186 32.1546L19.3396 41.022C18.7062 41.402 17.915 41.402 17.2816 41.022L2.50256 32.1546C0.996538 31.251 0.0750427 29.6234 0.0750427 27.8671V3.29939Z"
					fill="#EE262D" />
				<path
					d="M25.8215 14.2027V6.24541H31.0159V7.45378H27.2683V9.61407H30.7468V10.8224H27.2683V12.9944H31.0471V14.2027H25.8215Z"
					fill="white" />
				<path
					d="M19.151 14.2027V6.24541H24.3455V7.45378H20.5978V9.61407H24.0764V10.8224H20.5978V12.9944H24.3767V14.2027H19.151Z"
					fill="white" />
				<path
					d="M12.0086 14.2027V6.24541H15.0036C15.6172 6.24541 16.132 6.35162 16.5479 6.56402C16.9665 6.77642 17.2824 7.0743 17.4956 7.45766C17.7114 7.83844 17.8192 8.28267 17.8192 8.79036C17.8192 9.30065 17.7101 9.74359 17.4917 10.1192C17.2759 10.4922 16.9574 10.781 16.5362 10.9856C16.1151 11.1877 15.5977 11.2887 14.9841 11.2887H12.851V10.092H14.7892C15.1479 10.092 15.4417 10.0428 15.6705 9.94433C15.8993 9.84331 16.0683 9.69696 16.1775 9.50528C16.2892 9.31101 16.3451 9.0727 16.3451 8.79036C16.3451 8.50802 16.2892 8.26713 16.1775 8.06768C16.0657 7.86563 15.8954 7.71281 15.6666 7.6092C15.4378 7.50299 15.1427 7.44989 14.7814 7.44989H13.4554V14.2027H12.0086ZM16.1346 10.5971L18.1117 14.2027H16.4972L14.5552 10.5971H16.1346Z"
					fill="white" />
				<path d="M5.57404 14.2027V6.24541H10.6905V7.45378H7.02084V9.61407H10.3395V10.8224H7.02084V14.2027H5.57404Z"
					fill="white" />
				<path d="M24.5433 20.776V19.4283H31.6243V20.776H28.8812V28.3034H27.2864V20.776H24.5433Z" fill="white" />
				<path d="M17.783 28.3034V19.4283H23.4686V20.776H19.3908V23.1855H23.0786V24.5332H19.3908V28.3034H17.783Z"
					fill="white" />
				<path d="M16.042 19.4283V28.3034H14.4342V19.4283H16.042Z" fill="white" />
				<path
					d="M11.1678 22.2624C11.0956 22.0284 10.9959 21.8189 10.8688 21.634C10.7446 21.4463 10.5944 21.2859 10.4181 21.153C10.2448 21.0201 10.0454 20.9205 9.82009 20.854C9.59475 20.7847 9.34918 20.75 9.08339 20.75C8.6067 20.75 8.18201 20.8699 7.80933 21.1097C7.43664 21.3495 7.14341 21.7019 6.92962 22.1671C6.71872 22.6293 6.61327 23.1927 6.61327 23.8572C6.61327 24.5274 6.71872 25.0951 6.92962 25.5602C7.14052 26.0254 7.43375 26.3793 7.80933 26.622C8.1849 26.8617 8.62114 26.9816 9.11806 26.9816C9.56875 26.9816 9.95876 26.895 10.2881 26.7216C10.6204 26.5483 10.876 26.3027 11.0552 25.9849C11.2343 25.6642 11.3238 25.2887 11.3238 24.8582L11.6878 24.9145H9.2784V23.6578H12.8796V24.7239C12.8796 25.4837 12.7178 26.1409 12.3942 26.6956C12.0706 27.2503 11.6257 27.6779 11.0595 27.9784C10.4932 28.2759 9.8432 28.4247 9.10939 28.4247C8.29179 28.4247 7.57387 28.2413 6.95562 27.8743C6.34026 27.5046 5.85923 26.9802 5.51255 26.3013C5.16875 25.6195 4.99686 24.8105 4.99686 23.8745C4.99686 23.158 5.09797 22.5181 5.3002 21.9547C5.50533 21.3914 5.79134 20.9132 6.15825 20.5203C6.52515 20.1245 6.95562 19.8241 7.44964 19.6189C7.94367 19.4109 8.48103 19.3069 9.06172 19.3069C9.55286 19.3069 10.0108 19.3792 10.4355 19.5236C10.8601 19.6652 11.2372 19.8674 11.5665 20.1303C11.8987 20.3932 12.1718 20.7052 12.3855 21.0663C12.5993 21.4275 12.7395 21.8262 12.8059 22.2624H11.1678Z"
					fill="white" />
			</svg>
		<?php endif; ?>

		<?php if ( 'bogo-icons-4' === $offer_badge ) : ?>
			<svg xmlns="http://www.w3.org/2000/svg" width="51" height="34" viewBox="0 0 51 34" fill="none">
				<path
					d="M25.1193 33.4398C23.7708 33.4398 22.4146 33.1321 21.198 32.5504L5.2881 24.9429C2.0998 23.4182 0.119324 20.2759 0.119324 16.742C0.119324 13.2083 2.0998 10.0657 5.2881 8.54113L21.198 0.933533C22.4146 0.351845 23.7708 0.0442543 25.1193 0.0442543C26.4682 0.0442543 27.824 0.351845 29.0404 0.933533L44.9502 8.54113C48.1389 10.0657 50.1193 13.2083 50.1193 16.742C50.1193 20.2759 48.1389 23.4182 44.9502 24.9429L29.0404 32.5504C27.824 33.1321 26.4682 33.4398 25.1193 33.4398Z"
					fill="#EE262D" />
				<path
					d="M25.1193 32.0859C23.9715 32.0859 22.8176 31.8244 21.7821 31.3289L5.87194 23.7212C3.15873 22.424 1.47305 19.7496 1.47305 16.742C1.47305 13.7343 3.15873 11.06 5.87194 9.76267L21.7818 2.15507C22.8176 1.65957 23.9715 1.39797 25.1193 1.39797C26.2672 1.39797 27.4211 1.65957 28.4566 2.15507L44.3667 9.76267C47.08 11.06 48.7659 13.7343 48.7659 16.742C48.7659 19.7496 47.08 22.424 44.3667 23.7212L28.4569 31.3289C27.4211 31.8244 26.2672 32.0859 25.1193 32.0859Z"
					stroke="white" stroke-width="0.666667" stroke-miterlimit="10" stroke-linecap="round"
					stroke-dasharray="4 4" />
				<path d="M35.3168 15.9956V11.4361H36.2808V15.2008H38.2354V15.9956H35.3168Z" fill="white" />
				<path
					d="M31.413 15.9956H30.3801L31.954 11.4361H33.1962L34.768 15.9956H33.735L32.5929 12.478H32.5573L31.413 15.9956ZM31.3485 14.2034H33.7884V14.9559H31.3485V14.2034Z"
					fill="white" />
				<path d="M29.8341 11.4361V15.9956H28.8702V11.4361H29.8341Z" fill="white" />
				<path
					d="M28.1789 13.0324H27.2038C27.186 12.9062 27.1496 12.7941 27.0947 12.6962C27.0398 12.5967 26.9693 12.5121 26.8832 12.4424C26.7972 12.3726 26.6977 12.3192 26.5849 12.2821C26.4736 12.245 26.3526 12.2264 26.222 12.2264C25.9861 12.2264 25.7805 12.2851 25.6054 12.4023C25.4302 12.5181 25.2944 12.6873 25.198 12.9099C25.1015 13.131 25.0533 13.3997 25.0533 13.7158C25.0533 14.0409 25.1015 14.314 25.198 14.5351C25.2959 14.7563 25.4325 14.9232 25.6076 15.036C25.7827 15.1488 25.9853 15.2052 26.2154 15.2052C26.3445 15.2052 26.464 15.1882 26.5738 15.154C26.6851 15.1199 26.7838 15.0702 26.8699 15.0049C26.956 14.9381 27.0272 14.8572 27.0836 14.7622C27.1415 14.6672 27.1815 14.5589 27.2038 14.4371L28.1789 14.4416C28.1537 14.6509 28.0906 14.8527 27.9897 15.0472C27.8902 15.2401 27.7559 15.413 27.5867 15.5659C27.419 15.7173 27.2187 15.8375 26.9856 15.9265C26.7541 16.0141 26.4922 16.0579 26.1998 16.0579C25.7931 16.0579 25.4295 15.9659 25.1089 15.7818C24.7898 15.5978 24.5375 15.3314 24.352 14.9826C24.168 14.6338 24.076 14.2115 24.076 13.7158C24.076 13.2186 24.1695 12.7956 24.3565 12.4468C24.5435 12.098 24.7973 11.8324 25.1178 11.6498C25.4384 11.4658 25.7991 11.3738 26.1998 11.3738C26.464 11.3738 26.7088 11.4109 26.9344 11.4851C27.1615 11.5593 27.3626 11.6676 27.5377 11.8101C27.7129 11.9511 27.8554 12.124 27.9652 12.3288C28.0765 12.5337 28.1477 12.7682 28.1789 13.0324Z"
					fill="white" />
				<path
					d="M20.3175 15.9956V11.4361H23.3897V12.2309H21.2815V13.3173H23.2316V14.1121H21.2815V15.2008H23.3986V15.9956H20.3175Z"
					fill="white" />
				<path
					d="M16.2586 15.9956V11.4361H18.0574C18.4032 11.4361 18.6978 11.5021 18.9412 11.6342C19.1846 11.7648 19.3701 11.9466 19.4977 12.1797C19.6269 12.4112 19.6914 12.6784 19.6914 12.9811C19.6914 13.2839 19.6261 13.5511 19.4955 13.7826C19.3649 14.0141 19.1757 14.1945 18.9278 14.3236C18.6815 14.4527 18.3831 14.5173 18.0329 14.5173H16.8864V13.7448H17.877C18.0626 13.7448 18.2154 13.7128 18.3356 13.649C18.4573 13.5837 18.5479 13.4939 18.6072 13.3796C18.6681 13.2639 18.6985 13.131 18.6985 12.9811C18.6985 12.8297 18.6681 12.6977 18.6072 12.5849C18.5479 12.4706 18.4573 12.3823 18.3356 12.3199C18.2139 12.2561 18.0596 12.2242 17.8726 12.2242H17.2225V15.9956H16.2586Z"
					fill="white" />
				<path
					d="M14.6239 12.7474C14.6061 12.5678 14.5297 12.4283 14.3946 12.3288C14.2596 12.2294 14.0763 12.1797 13.8448 12.1797C13.6874 12.1797 13.5546 12.2019 13.4463 12.2465C13.3379 12.2895 13.2548 12.3496 13.1969 12.4268C13.1405 12.504 13.1123 12.5915 13.1123 12.6895C13.1094 12.7711 13.1264 12.8424 13.1635 12.9032C13.2021 12.9641 13.2548 13.0168 13.3216 13.0613C13.3884 13.1043 13.4656 13.1422 13.5531 13.1748C13.6407 13.206 13.7342 13.2327 13.8336 13.255L14.2432 13.3529C14.4421 13.3975 14.6247 13.4568 14.7909 13.531C14.9571 13.6053 15.1011 13.6965 15.2228 13.8049C15.3445 13.9132 15.4387 14.0409 15.5055 14.1878C15.5738 14.3347 15.6087 14.5032 15.6102 14.6932C15.6087 14.9722 15.5374 15.2141 15.3964 15.4189C15.2569 15.6223 15.0551 15.7803 14.7909 15.8931C14.5282 16.0045 14.2113 16.0601 13.8403 16.0601C13.4722 16.0601 13.1517 16.0037 12.8786 15.8909C12.607 15.7781 12.3947 15.6111 12.2419 15.39C12.0905 15.1674 12.0111 14.8921 12.0037 14.564H12.9365C12.9468 14.7169 12.9906 14.8446 13.0678 14.947C13.1465 15.0479 13.2511 15.1243 13.3817 15.1763C13.5138 15.2267 13.6629 15.252 13.8292 15.252C13.9924 15.252 14.1342 15.2282 14.2544 15.1807C14.3761 15.1332 14.4703 15.0672 14.5371 14.9826C14.6039 14.898 14.6373 14.8008 14.6373 14.6909C14.6373 14.5885 14.6069 14.5025 14.546 14.4327C14.4867 14.3629 14.3991 14.3036 14.2833 14.2546C14.169 14.2056 14.0288 14.1611 13.8626 14.121L13.3661 13.9963C12.9817 13.9028 12.6782 13.7566 12.4556 13.5578C12.233 13.3589 12.1224 13.091 12.1239 12.7541C12.1224 12.478 12.1959 12.2368 12.3443 12.0305C12.4942 11.8242 12.6997 11.6632 12.9609 11.5474C13.2222 11.4316 13.519 11.3738 13.8514 11.3738C14.1898 11.3738 14.4852 11.4316 14.7375 11.5474C14.9913 11.6632 15.1887 11.8242 15.3297 12.0305C15.4706 12.2368 15.5434 12.4758 15.5478 12.7474H14.6239Z"
					fill="white" />
				<path
					d="M34.0243 20.9757C34.0065 20.7961 33.9301 20.6566 33.795 20.5572C33.6599 20.4577 33.4766 20.408 33.2451 20.408C33.0878 20.408 32.955 20.4303 32.8466 20.4748C32.7383 20.5178 32.6552 20.5779 32.5973 20.6551C32.5409 20.7323 32.5127 20.8199 32.5127 20.9178C32.5097 20.9994 32.5268 21.0707 32.5639 21.1315C32.6025 21.1924 32.6552 21.2451 32.722 21.2896C32.7887 21.3326 32.8659 21.3705 32.9535 21.4031C33.041 21.4343 33.1345 21.461 33.234 21.4833L33.6436 21.5813C33.8425 21.6258 34.025 21.6851 34.1913 21.7594C34.3575 21.8336 34.5014 21.9248 34.6232 22.0332C34.7449 22.1415 34.8391 22.2692 34.9059 22.4161C34.9742 22.5631 35.009 22.7315 35.0105 22.9215C35.009 23.2005 34.9378 23.4424 34.7968 23.6473C34.6573 23.8506 34.4554 24.0087 34.1913 24.1215C33.9286 24.2328 33.6117 24.2884 33.2407 24.2884C32.8726 24.2884 32.552 24.232 32.2789 24.1192C32.0073 24.0064 31.7951 23.8395 31.6422 23.6183C31.4908 23.3957 31.4114 23.1204 31.404 22.7924H32.3368C32.3472 22.9452 32.391 23.0729 32.4682 23.1753C32.5468 23.2762 32.6515 23.3526 32.7821 23.4046C32.9141 23.4551 33.0633 23.4803 33.2295 23.4803C33.3928 23.4803 33.5345 23.4565 33.6547 23.409C33.7764 23.3616 33.8707 23.2955 33.9375 23.2109C34.0043 23.1263 34.0377 23.0291 34.0377 22.9193C34.0377 22.8169 34.0072 22.7308 33.9464 22.661C33.887 22.5913 33.7994 22.5319 33.6837 22.4829C33.5694 22.4339 33.4291 22.3894 33.2629 22.3493L32.7665 22.2247C32.3821 22.1312 32.0786 21.985 31.8559 21.7861C31.6333 21.5872 31.5228 21.3193 31.5242 20.9824C31.5228 20.7063 31.5962 20.4651 31.7446 20.2588C31.8945 20.0525 32.1001 19.8915 32.3613 19.7757C32.6225 19.66 32.9193 19.6021 33.2518 19.6021C33.5902 19.6021 33.8855 19.66 34.1378 19.7757C34.3916 19.8915 34.589 20.0525 34.73 20.2588C34.871 20.4651 34.9437 20.7041 34.9482 20.9757H34.0243Z"
					fill="white" />
				<path d="M27.994 24.2239V19.6644H28.9579V23.4291H30.9125V24.2239H27.994Z" fill="white" />
				<path
					d="M24.0903 24.2239H23.0573L24.6313 19.6644H25.8735L27.4452 24.2239H26.4122L25.2702 20.7063H25.2346L24.0903 24.2239ZM24.0257 22.4317H26.4657V23.1842H24.0257V22.4317Z"
					fill="white" />
				<path
					d="M19.4659 24.2239V19.6644H22.5381V20.4592H20.4298V21.5456H22.38V22.3404H20.4298V23.4291H22.547V24.2239H19.4659Z"
					fill="white" />
				<path
					d="M16.5212 24.2239H14.9049V19.6644H16.5345C16.9931 19.6644 17.3879 19.7557 17.7189 19.9382C18.0498 20.1193 18.3044 20.3798 18.4825 20.7197C18.662 21.0596 18.7518 21.4662 18.7518 21.9397C18.7518 22.4146 18.662 22.8228 18.4825 23.1642C18.3044 23.5055 18.0483 23.7675 17.7144 23.9501C17.382 24.1326 16.9842 24.2239 16.5212 24.2239ZM15.8689 23.3979H16.4811C16.766 23.3979 17.0057 23.3475 17.2002 23.2465C17.3961 23.1441 17.543 22.9861 17.6409 22.7723C17.7404 22.5571 17.7901 22.2796 17.7901 21.9397C17.7901 21.6028 17.7404 21.3275 17.6409 21.1137C17.543 20.9 17.3968 20.7427 17.2024 20.6418C17.008 20.5408 16.7683 20.4904 16.4833 20.4904H15.8689V23.3979Z"
					fill="white" />
			</svg>
		<?php endif; ?>
	</div>
<?php endif ?>
