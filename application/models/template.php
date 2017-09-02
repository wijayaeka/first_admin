<?php
class template extends  CI_Model{
	
	
	public function email_request_accept($no_kontrak,$nama,$nama_perusahaan,$email,$no_telp,$tgl_persetujuan,$list_data,$jml_uang,$jml_uang_rupiah,$data_tpk){
		$message="<div style='color: #323232; border:2px solid #ddd; padding:5px 5px; max-width: 900px; position: relative; margin:0 auto; '><table data-module='module 2_24000_88089_23259' data-bgcolor='Header' data-bg='Header' style='max-width: 900px; position: relative; opacity: 1; z-index: 0; background-image: url(&quot;https://pbs.twimg.com/media/CbyMh75UAAA4HrR.jpg:large&quot;); background-size: cover; background-position: 100% 10%;' bgcolor='#3b3b3b' width='100%' border='0' align='center' cellpadding='0' cellspacing='0' >
		<tr>
			<td class='zay600' border='0' align='center' cellpadding='0' cellspacing='0' style='background-size: cover;'>
				<table cellspacing='0' cellpadding='0' align='center' border='0' width='90%' class='zay600'>
					<tr>
						<td align='center'>
							<table class='zay600' width='90%' align='center' border='0' cellpadding='0' cellspacing='0'>
								<tr>
									<td height='40'>
									</td>
								</tr>
								<tr>
									<td class='zay-inner'>
										<table class='zay600' align='right' border='0' cellpadding='0' cellspacing='0' width='450'>
											<!-- logo -->

											<tr>
												<td align='right'>
													<table class='zay-inner' align='center' border='0' cellpadding='0' cellspacing='0' width='100%'>
														<tr>
															
															<td  data-link-style='text-decoration:none; color:#ffffff;' data-link-color='Link' data-color='Menu' data-size='Menu' data-min='12' data-max='16' style='font-family: 'Open Sans', Arial, sans-serif; color: rgb(255, 255, 255); font-size: 12px; line-height: 20.4px; padding-left: 10px; padding-right: 10px;' align='center'>
																<multiline style='color: rgb(255, 255, 255); padding:50px;'>
																	 <img src='https://pbs.twimg.com/media/CcBpd4SUkAAoNz3.jpg:large' style='max-width:120px;'>
																</multiline>
															</td>
															
															<td  data-link-style='text-decoration:none; color:#ffffff;' data-link-color='Link' data-color='Menu' data-size='Menu' data-min='12' data-max='16' style='font-family: 'Open Sans', Arial, sans-serif; color: rgb(255, 255, 255); font-size: 12px; line-height: 20.4px; padding-left: 10px; padding-right: 10px;' align='center'>
																<multiline style='color: rgb(255, 255, 255); padding:50px;'>
																	 <img src='https://pbs.twimg.com/media/Cb8fl1-UYAAFzlU.jpg:large' style='max-width:120px;'>
																</multiline>
															</td>
															<td  data-link-style='text-decoration:none; color:#ffffff;' data-link-color='Link' data-color='Menu' data-size='Menu' data-min='12' data-max='16' style='font-family: 'Open Sans', Arial, sans-serif; color: rgb(255, 255, 255); font-size: 12px; line-height: 20.4px; padding-left: 10px; padding-right: 10px;' align='center'>
																<multiline style='color: rgb(255, 255, 255); padding:50px;'>
																	 <img src='https://pbs.twimg.com/media/CcBoZCkUkAASc_J.jpg:large' style='max-width:120px;'>
																</multiline>
															</td>
															
														</tr>
													</table>
												</td>
											</tr>
											<!-- end logo -->

										</table>
										<!--End Space-->

									</td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td height='300' class='header-td'>
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
	<table width='100%' border='0' cellspacing='0' cellpadding='0' align='center' class='textAlignCenter currentTable' style='color: #323232;' data-module='intro'>
		<tr>
			<td bgcolor='#FFFFFF' style='border-bottom: 1px solid #ededed;'>
				<table width='600' border='0' cellspacing='0' cellpadding='0' align='center' class='alignCenter' style='font-family: 'ProximaNW01-AltLightReg', Helvetica, Arial, sans-serif;'>
					<tr>
						<td height='70' style='line-height: 0px; font-size: 1px;'>
							&nbsp;
						</td>
					</tr>
					<tr>
						<td align='center' class='paddingBoth' style='font-size: 30px;'>
							<p style='color: #6b6b6b;padding: 0px 0px 0px 0px;' data-color='Headline Big' data-size='Headline Big' data-min='16'>
								Permintaan Pembelian Kayu Kontrak Reguler
							</p>
						</td>
					</tr>
					<tr>
						<td height='60' style='line-height: 0px; font-size: 1px;'>
							&nbsp;
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
	<table width='100%' border='0' cellspacing='0' cellpadding='0' align='center' class='textAlignCenter currentTable' style='font-size: 32px; color: #323232;' data-module='2 columns'>
		<tr>
			<td bgcolor='#FFFFFF' class='editable'>
				<table width='600' border='0' cellspacing='0' cellpadding='0' align='left' class='textAlignCenter'>
					<tr>
						<td height='10' class='reset' style='line-height: 0px; font-size: 1px;'>
							&nbsp;
						</td>
					</tr>
					<tr>
						<td>
							<table style='font-family: 'ProximaNW01-AltLightReg', Helvetica, Arial, sans-serif;' width='260' border='0' cellspacing='0' cellpadding='0' align='left' class='textAlignCenter'>
								<tr>
									<td class='increasePaddingBottom-Both'>
										<p style='font-size: 16px; color: #6b6b6b; line-height: 28px; padding: 30px 0px 45px 0px;' data-color='Paragraphs' data-size='Paragraphs' data-max='24'>
												Kepada Yth. $nama_perusahaan<br>
												$nama<br>
												$email<br>
												$no_telp<br>
											</p>
									</td>
								</tr>
							</table>
						</td>
						<td ><div style='width:380px;'></div></td>
						<td style='text-align:right; float:right;'>
							<table style='float:right;font-family: 'ProximaNW01-AltLightReg', Helvetica, Arial, sans-serif;' width='260' border='0' cellspacing='0' cellpadding='0' align='left' class='textAlignCenter'>
								<tr>
									<td class='increasePaddingBottom-Both'>
										<p style='font-size: 16px; color: #6b6b6b; line-height: 28px; padding: 30px 0px 45px 0px;' data-color='Paragraphs' data-size='Paragraphs' data-max='24'>
												No : <br>
												Tanggal Disetujui: $tgl_persetujuan
											</p>
									</td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td height='30' class='reset' style='line-height: 0px; font-size: 1px;'>
							&nbsp;
						</td>
					</tr>
				</table>
	<table width='100%' align='center' cellpadding='0' cellspacing='0' border='0' data-bgcolor='s4_bg' style='margin:0 auto; background-position:center; background-size:cover; background-repeat:no-repeat; background-color:#ffffff; max-width:800px;' data-module='section_4_97954' data-bg='s4_bg_img'>
		<tr>
			<td align='center' class='container'>
				<table width='100%' align='center' cellpadding='0' cellspacing='0' border='0' class='container' style='border-collapse:collapse; border: 0px;'>
					<!-- margin -->

					<tr>
						<td height='60' width='1' style='font-size: 16px; padding-left:30px;line-height: 60px; height:60px;'>
						<p style='color: #323232; padding: 0px 0px 0px 0px;' data-color='Headline Big' data-size='Headline Big' data-min='16'>
								Pesanan anda sesuai kontrak Reguler dengan  Nomor :$no_kontrak sebagai berikut:

							</p>	
						</td>
					</tr>
					<!-- margin -->

					<tr>
						<td>
							<table class='container' align='center' width='900' border='0' cellpadding='0' cellspacing='0' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px; '>
								<tr>
									<th width='400' align='right' class='container_wrap' style='padding-left:0px;vertical-align: top;'>
										<table style=' width:615px;height:100%;padding:15px;'  cellspacing='10px'>
												<thead>
												<tr>
													<td style='border-bottom:1px solid #F88C00; padding:5px;background:#ffff;text-align:center;width:10px;'>No</td>
													<td style='border-bottom:1px solid #F88C00; padding:5px;background:#ffff;text-align:center;'>Wilayah</td>
													<td style='border-bottom:1px solid #F88C00; padding:5px;background:#ffff;text-align:center;'>Jenis</td>
													<td style='border-bottom:1px solid #F88C00; padding:5px;background:#ffff;text-align:center;'>Volume</td>
													<td style='border-bottom:1px solid #F88C00; padding:5px;background:#ffff;text-align:center;'>Sortimen</td>
												</tr>
												</thead>
												<tbody>";
												foreach($data_tpk as $row){
													  $data['NAMA_KANTOR'] = $row->NAMA_KANTOR;  # THIS DOES NOT WORK
										                $data['nama_jenis'] = $row->nama_jenis;
										                $data['volume'] = $row->volume;
										                $data['options'] = $row->options;
										                $data['sortimen'] = $row->sortimen;
												$message .="
													
												<tr>
													<td style='padding:15px;font-size:12px;text-align:center;'>&nbsp;1</td>
													<td style='padding:15px; font-size:12px; text-align:center;'>&nbsp;$data[NAMA_KANTOR]</td>
													<td style='padding:15px;font-size:12px;text-align:center;'>&nbsp;$data[nama_jenis]</td>
													<td style='padding:15px;font-size:12px;text-align:center;'>&nbsp;$data[volume]</td>
													<td style='padding:15px;font-size:12px;text-align:center;'>&nbsp;$data[sortimen]</td>
												</tr>";
												}
												$message .= "
												</tbody>

										</table>
										<table data-module='number' width='100%' align='center' border='0' cellpadding='0' cellspacing='0'>
							<tr>
								<td align='center'>
									
								</td>
							</tr>
						</table>
									</th>
									<th width='100' align='right' class='container_wrap padding_top' style='vertical-align: middle;'>
										<table width='280' align='right' class='container' border='0' cellpadding='0' cellspacing='0' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;border: 0px; vertical-align: middle;'>
											<tr>
												<td>
													<table width='180' align='center' class='container' border='0' cellpadding='0' cellspacing='0' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;border: 0px;'>
														<tr>
															<td>
																<img class='image_container' src='https://pbs.twimg.com/media/CdpvBn1W8AAyyoy.jpg:large'  width='250' alt='#' style='display:block; border-radius:10px 10px;vertical-align:middle;' />
															</td>
														</tr>
													</table>
												</td>
											</tr>
										</table>
									</th>
								</tr>
							</table>
						</td>
					</tr>
					<!-- margin -->

					<!-- margin -->

					<tr>
						<td height='20' width='1' style='font-size: 1px; line-height: 20px; height:20px;'>
							&nbsp;<img src='https://pbs.twimg.com/media/Cgc9gPLUYAA8J4k.png:large' alt='spacer' width='1' height='1' />
						</td>
					</tr>
					<!-- margin -->

				</table>
			</td>
		</tr>
	</table>
	<table data-module='2-features' width='100%' align='center' border='0' cellpadding='0' cellspacing='0'>
		<tr>
			<td align='center'>
				<table width='100%' align='center' border='0' cellpadding='0' cellspacing='0'>
					<tr>
						<td data-bgcolor='Main BG' align='center' valign='top' bgcolor='#e6ebee'>
							<table class='table600' width='900' align='center' border='0' cellpadding='0' cellspacing='0'>
								<tr>
									<td height='50' style='font-size: 1px; line-height: 50px;'>
										&nbsp;
									</td>
								</tr>
								<tr>
									<td>
										<table class='full-width' width='387' align='left' border='0' cellpadding='0' cellspacing='0' bgcolor='#ffffff' style='border-radius: 4px;'>
											<tr>
												<td align='center'>
													<table class='table-container' width='250' align='center' border='0' cellpadding='0' cellspacing='0'>
														<tr>
															<td height='20' style='font-size: 1px; line-height: 20px;'>
																&nbsp;
															</td>
														</tr>
														<tr>
															<td>
																<table width='100%' align='left' border='0' cellpadding='0' cellspacing='0'>
																	<tr>
																		<td data-color='Title A' data-size='Title A' align='left' style='font-family: 'Montserrat', sans-serif; font-size: 15px; font-weight: 400; color: #333333; letter-spacing: 2px; line-height: 48px;'>
																			Transfer Uang Jaminan sebesar 90% yang disetujui senilai : 
																			
																		</td>
																	</tr>
																	<tr>
																		<td data-color='Content A' data-size='Content A' align='left' style='font-family: 'Open Sans', sans-serif; font-size: 13px; font-weight: 400; color: #8f96a1; line-height: 24px;'>
																			<h2>asd</h2>
																			
																			<p style='font-size:13px;'>
																			Ke Nomor Rekening:
																				060901000388301 <br>
																			 A/N. DIVISI KOMERSIAL KAYU JATENG
																			 </p>
																		</td>
																	</tr>
																</table>
															</td>
														</tr>
														<tr>
															<td height='20' style='font-size: 1px; line-height: 20px;'>
																&nbsp;
															</td>
														</tr>
													</table>
												</td>
											</tr>
										</table>
										<!-- SPACE -->

										<table class='full-width' width='1' align='left' border='0' cellpadding='0' cellspacing='0' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;'>
											<tr>
												<td width='1' height='40' style='font-size: 40px; line-height: 40px;'>
												</td>
											</tr>
										</table>
										<!-- END SPACE -->

										<table class='full-width' width='287' align='right' border='0' cellpadding='0' cellspacing='0' bgcolor='#ffffff' style='border-radius: 4px;'>
											<tr>
												<td align='center'>
													<table class='table-container' width='250' align='center' border='0' cellpadding='0' cellspacing='0'>
														<tr>
															<td height='20' style='font-size: 1px; line-height: 20px;'>
																&nbsp;
															</td>
														</tr>
														<tr>
															<td>
																<table width='100%' align='left' border='0' cellpadding='0' cellspacing='0'>
																	<tr>
																		<td data-color='Title A' data-size='Title A' align='left' style='font-family: 'Montserrat', sans-serif; font-size: 18px; font-weight: 400; color: #333333; letter-spacing: 2px; line-height: 48px;'>
																			
																		</td>
																	</tr>
																	<tr>
																		<td data-color='Content A' data-size='Content A' align='left' style='font-family: 'Open Sans', sans-serif; font-size: 13px; font-weight: 400; color: #8f96a1; line-height: 24px;'>
																			<h2>100000</h2>
																			
																		</td>
																	</tr>
																</table>
															</td>
														</tr>
														<tr>
															<td height='20' style='font-size: 1px; line-height: 20px;'>
																&nbsp;
															</td>
														</tr>
													</table>
												</td>
											</tr>
										</table>
									</td>
								</tr>
								<tr>
									<td height='50' style='font-size: 1px; line-height: 50px;'>
										&nbsp;
									</td>
								</tr>
							</table>
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
	<table width='100%' border='0' cellspacing='0' cellpadding='0' align='center' class='textAlignCenter currentTable' style='color: #323232;' data-module='intro'>
		<tr>
			<td bgcolor='#FFFFFF' style='border-bottom: 1px solid #ededed;'>
				<table width='600' border='0' cellspacing='0' cellpadding='0' align='center' class='alignCenter' style='font-family: 'ProximaNW01-AltLightReg', Helvetica, Arial, sans-serif;'>
					<tr>
						<td height='70' style='line-height: 0px; font-size: 1px;'>
							&nbsp;
						</td>
					</tr>
					<tr>
						<td align='center' class='paddingBoth' style='font-size: 16px;'>
							<p style='color: red; padding: 0px 0px 0px 0px;' data-color='Headline Big' data-size='Headline Big' data-min='16'>
								Silahkan untuk melakukan konfimasi pesanan dengan menggunakan akun Anda.
									Untuk Konfirmasi kontrak ini klik pada link berikut Konfirmasi Persetujuan Kontrak
							</p>
						</td>
					</tr>
					<tr>
			<td height='40' style='line-height: 0px; font-size: 1px;' bgcolor='#FFFFFF'>
				&nbsp;
			</td>
		</tr>
				</table>
			</td>
		</tr>
	</table>
	<table width='100%' border='0' cellspacing='0' cellpadding='0' align='center' class='textAlignCenter' style='color: #323232;' data-module='footer'>
		<tr>
			<td height='40' style='line-height: 0px; font-size: 1px;' bgcolor='#FFFFFF'>
				&nbsp;
			</td>
		</tr>
		<tr>
			<td bgcolor='#FFFFFF'>
				<table width='600' border='0' cellspacing='0' cellpadding='0' align='center' class='textAlignCenter'>
					<tr>
						<td>
							<table width='300' border='0' cellspacing='0' cellpadding='0' align='left' class='textAlignCenter' style='font-size: 12px; font-family: 'ProximaNW01-AltLightReg', Helvetica, Arial, sans-serif;'>
								<tr>
									<td data-color='Footer Paragraphs' data-size='Footer Paragraphs' data-max='24'>
										
										KANTOR GM I JAWA TENGAH<br>
										Jl. Pahlawan No. 15-17 Semarang<br>
										No Rekening :060901000388301<br>
										A/N. DIVISI KOMERSIAL KAYU JATENG
									</td>
								</tr>
							</table>
							<table width='300' border='0' cellspacing='0' cellpadding='0' align='right' class='alignCenter' style='font-size: 12px; font-family: 'ProximaNW01-AltLightReg', Helvetica, Arial, sans-serif;'>
								<tr>
									<td align='right' class='increasePadding-BothReset' data-size='Footer Links' data-color='Footer Links' data-max='24'>
									Copyright &copy; Tokoperhutani 2016
									<img src='https://www.tokoperhutani.com/assets/images/tokoperhutani.png' style='width:200px;'><br>
										 
									</td>
								</tr>
							</table>
						</td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td height='40' style='line-height: 0px; font-size: 1px;' bgcolor='#FFFFFF'>
				&nbsp;
			</td>
		</tr>
	</table>
	</div>";
				return $message;
				}
	
}
?>