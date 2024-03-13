
			</div>

			<div id="foot">

				<div style="text-align: right; float: right;">
					&#169; 2001-2019, ManitobaPlates.com
				</div>

				<div style="text-align: left;">
					<?php
						$time = explode(' ', microtime());
						$finish = $time[1] + $time[0];
						$total_time = round(($finish - $start) * 1000, 2);
						echo "page generated in ".$total_time." ms";
					?>
				</div>

			</div>

		</div>

		<script src="http://www.google-analytics.com/urchin.js" type="text/javascript" />
		<script type="text/javascript">_uacct = "UA-3507570-1"; urchinTracker();</script>

	</body>

</html>
