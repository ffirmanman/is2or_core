-- Add/Edit payment_processors
SET @mfOldProcessorId=(SELECT `processor_id` FROM `cscart_payment_processors` WHERE `processor_script`='myfatoorah_payment_processor.php' ORDER BY `processor_id` ASC LIMIT 1);
SET @mfLstProcessorId=(SELECT `processor_id` FROM `cscart_payment_processors` ORDER BY `processor_id` DESC LIMIT 1)+1;
SET @mfNewProcessorId=IFNULL(@mfOldProcessorId, @mfLstProcessorId); 



REPLACE INTO `cscart_payment_processors`
(`processor_id`, `processor`, `processor_script`, `processor_template`, `admin_template`, `callback`, `type`, `addon`) VALUES
(@mfNewProcessorId, 'MyFatoorah', 'myfatoorah_payment_processor.php', 'addons/myfatoorah/views/orders/components/payments/myfatoorah.tpl', '', 'N', 'P', '');


-- -----------------------------------------------------------------------------
-- Add/Edit payments
SET @mfProcessorId=(SELECT `processor_id` FROM `cscart_payment_processors` WHERE `processor_script`='myfatoorah_payment_processor.php' ORDER BY `processor_id` ASC LIMIT 1);


SET @mfOldPaymentId=(SELECT `payment_id` FROM `cscart_payments` WHERE `processor_id`=@mfProcessorId ORDER BY `payment_id` ASC LIMIT 1);
SET @mfLstPaymentId=(SELECT `payment_id` FROM `cscart_payments` ORDER BY `payment_id` DESC LIMIT 1)+1;
SET @mfNewPaymentId=IFNULL(@mfOldPaymentId, @mfLstPaymentId); 


REPLACE INTO `cscart_payments`
(`payment_id`, `processor_id`, `status`, `template`) VALUES
(@mfNewPaymentId, @mfProcessorId, 'D', 'addons/myfatoorah/views/orders/components/payments/myfatoorah.tpl');


-- -----------------------------------------------------------------------------
-- Add/Edit payment_descriptions
SET @mfPaymentId=(SELECT `payment_id` FROM `cscart_payments` WHERE `processor_id`=@mfProcessorId ORDER BY `payment_id` ASC LIMIT 1);

REPLACE INTO cscart_payment_descriptions (`payment`, `description`, `surcharge_title`, `lang_code`, `payment_id`) VALUES 
('MyFatoorah', 'Pay with MyFatoorah', '', 'en', @mfPaymentId),
('ماي فاتورة', 'إدفع مع ماي فاتورة', '', 'ar', @mfPaymentId);


-- -----------------------------------------------------------------------------
-- Add/Edit images
SET @mfOldImageId=(SELECT `image_id` FROM `cscart_images` WHERE `image_path`='myfatoorah.png' ORDER BY `image_id` ASC LIMIT 1);
SET @mfLstImageId=(SELECT `image_id` FROM `cscart_images` ORDER BY `image_id` DESC LIMIT 1)+1;
SET @mfNewImageId=IFNULL(@mfOldImageId, @mfLstImageId); 

REPLACE INTO cscart_images 
(`image_id`, `image_path`, `image_x`, `image_y`) VALUES
(@mfNewImageId, 'myfatoorah.png', 128, 128);


-- -----------------------------------------------------------------------------
-- Add/Edit common_descriptions
SET @mfImageId=(SELECT `image_id` FROM `cscart_images` WHERE `image_path`='myfatoorah.png' ORDER BY `image_id` ASC LIMIT 1);


REPLACE INTO cscart_common_descriptions 
(`object_id`, `object_type`, `description`, `lang_code`, `object`, `object_holder`) VALUES
(@mfImageId, '', 'MyFatoorah', 'en', '', 'images'),
(@mfImageId, '', 'ماي فاتورة', 'ar', '', 'images');


-- -----------------------------------------------------------------------------
-- Add/Edit images_links
SET @mfOldPairId=(SELECT `pair_id` FROM `cscart_images_links` WHERE `object_id`=@mfPaymentId AND `object_type`='payment' AND `type`='M' ORDER BY `image_id` ASC LIMIT 1);
SET @mfLstPairId=(SELECT `pair_id` FROM `cscart_images_links` ORDER BY `pair_id` DESC LIMIT 1)+1;
SET @mfNewPairId=IFNULL(@mfOldPairId, @mfLstPairId); 

REPLACE INTO cscart_images_links (`pair_id`, `object_id`, `object_type`, `image_id`, `detailed_id`, `type`, `position`) VALUES
(@mfNewPairId, @mfPaymentId, 'payment', @mfImageId, 0, 'M', 0);