<?php defined('BASEPATH') || exit('No direct script access allowed');
/**
 * Bonfire
 *
 * An open source project to allow developers to jumpstart their development of
 * CodeIgniter applications
 *
 * @package   Bonfire
 * @author    Bonfire Dev Team
 * @copyright Copyright (c) 2011 - 2018, Bonfire Dev Team
 * @license   http://opensource.org/licenses/MIT The MIT License
 * @link      http://cibonfire.com
 * @since     Version 1.0
 */

/**
 * Users language file (English).
 *
 * Localization strings used by Bonfire.
 *
 * @package Bonfire\Modules\Users\Language\English
 * @author  Bonfire Dev Team
 * @link    http://cibonfire.com/docs/developer
 */

$lang['us_account_deleted']			= 'Unfortunately your account has been deleted. It has not yet been purged and <strong>may still</strong> be restored. Contact the administrator at %s.';

$lang['us_bad_email_pass']			= 'Incorrect email or password.';
$lang['us_account_ver_guru']	    = 'Admin belum memverifikasi akun Anda. Silahkan tunggu!.';
$lang['us_account_ver_siswa']	    = 'Guru belum memverifikasi akun Anda. Silahkan tunggu!.';
$lang['us_must_login']				= 'You must be logged in to view that page.';
$lang['us_no_permission']			= 'You do not have permission to access that page.';
$lang['us_fields_required']         = '%s and Password fields must be filled out.';

$lang['us_access_logs']				= 'Access Logs';
$lang['us_logged_in_on']			= '<b>%s</b> logged in on %s';
$lang['us_no_access_message']		= '<p>Congratulations!</p><p>All of your users have good memories!</p>';
$lang['us_log_create']				= 'created a new %s';
$lang['us_log_edit']				= 'modified user';
$lang['us_log_delete']				= 'deleted user';
$lang['us_log_logged']				= 'logged in from';
$lang['us_log_logged_out']			= 'logged out from';
$lang['us_log_reset']				= 'reset their password.';
$lang['us_log_register']			= 'registered a new account.';
$lang['us_log_edit_profile']		= 'updated their profile';


$lang['us_purge_del_confirm']		= 'Are you sure you want to completely remove the user account(s) - there is no going back?';
$lang['us_action_purged']			= 'Users purged.';
$lang['us_action_deleted']			= 'The User was successfully deleted.';
$lang['us_action_not_deleted']		= 'We could not delete the user: ';
$lang['us_delete_account']			= 'Delete Account';
$lang['us_delete_account_note']		= '<h3>Delete this Account</h3><p>Deleting this account will revoke all of their privileges on the site.</p>';
$lang['us_delete_account_confirm']	= 'Are you sure you want to delete the user account(s)?';

$lang['us_restore_account']			= 'Restore Account';
$lang['us_restore_account_note']	= '<h3>Restore this Account</h3><p>Un-delete this user\'s account.</p>';
$lang['us_restore_account_confirm']	= 'Restore this users account?';

$lang['us_role']					= 'Role';
$lang['us_role_lower']				= 'role';
$lang['us_no_users']				= 'No users found.';
$lang['us_create_user']				= 'Create New User';
$lang['us_create_user_note']		= '<h3>Create A New User</h3><p>Create new accounts for other users in your circle.</p>';
$lang['us_edit_user']				= 'Edit User';
$lang['us_restore_note']			= 'Restore the user and allow them access to the site again.';
$lang['us_unban_note']				= 'Un-Ban the user and all them access to the site.';
$lang['us_account_status']			= 'Account Status';

$lang['us_failed_login_attempts']	= 'Failed Login Attempts';
$lang['us_failed_logins_note']		= '<p>Congratulations!</p><p>All of your users have good memories!</p>';

$lang['us_banned_admin_note']		= 'This user has been banned from the site.';
$lang['us_banned_msg']				= 'This account does not have permission to enter the site.';

$lang['us_first_name']				= 'First Name';
$lang['us_last_name']				= 'Last Name';
$lang['us_address']					= 'Address';
$lang['us_street_1']				= 'Street 1';
$lang['us_street_2']				= 'Street 2';
$lang['us_city']					= 'City';
$lang['us_state']					= 'State';
$lang['us_no_states']				= 'There are no states/provences/counties/regions for this country. Create them in the address config file';
$lang['us_no_countries']			= 'Unable to find any countries. Create them in the address config file.';
$lang['us_country']					= 'Country';
$lang['us_zipcode']					= 'Zipcode';

$lang['us_user_management']			= 'User Management';
$lang['us_email_in_use']			= 'The %s address is already in use. Please choose another.';

$lang['us_edit_profile']			= 'Edit Profile';
$lang['us_edit_note']				= 'Enter your details below and click Save.';

$lang['us_reset_password']			= 'Reset Password';
$lang['us_reset_note']				= 'Enter your email and we will send a temporary password to you.';
$lang['us_send_password']			= 'Send Password';

$lang['us_login']					= 'Please sign in';
$lang['us_remember_note']			= 'Remember me';
$lang['us_sign_up']					= 'Create An Account';
$lang['us_forgot_your_password']	= 'Forgot Your Password?';
$lang['us_let_me_in']				= 'Sign In';

$lang['us_password_mins']			= 'Minimum 8 characters.';
$lang['us_register']				= 'Register';
$lang['us_already_registered']		= 'Already registered?';

$lang['us_action_save']				= 'Save User';
$lang['us_unauthorized']			= 'Unauthorized. Sorry you do not have the appropriate permission to manage the "%s" role.';
$lang['us_empty_id']				= 'No userid provided. You must provide a userid to perform this action.';
$lang['us_self_delete']				= 'Unauthorized. Sorry, you can not delete yourself.';

$lang['us_filter_first_letter']		= 'Username starts with: ';
$lang['us_account_details']			= 'Account Details';
$lang['us_last_login']				= 'Last Login';


$lang['us_account_created_success'] = 'Your account has been created. Please log in.';

$lang['us_invalid_user_id']         = 'Invalid user id.';
$lang['us_invalid_email']           = 'Cannot find that email in our records.';

$lang['us_reset_password_note']     = 'Enter your new password below to reset your password.';
$lang['us_reset_invalid_email']     = 'That did not appear to be a valid password reset request.';
$lang['us_reset_pass_subject']      = 'Your Temporary Password';
$lang['us_reset_pass_message']      = 'Please check your email for instructions to reset your password.';
$lang['us_reset_pass_error']        = 'Unable to send an email: ';

$lang['us_set_password']			= 'Save New Password';
$lang['us_reset_password_success']  = 'Please login using your new password.';
$lang['us_reset_password_error']    = 'There was an error resetting your password: %s';


$lang['us_profile_updated_success'] = 'Profile successfully updated.';
$lang['us_profile_updated_error']   = 'There was a problem updating your profile ';

$lang['us_register_disabled']       = 'New account registrations are not allowed.';


$lang['us_user_created_success']    = 'User successfully created.';
$lang['us_user_update_success']     = 'User successfully updated.';

$lang['us_user_restored_success']   = 'User successfully restored.';
$lang['us_user_restored_error']     = 'Unable to restore user: ';


/* Activations */
$lang['us_status']					= 'Status';
$lang['us_inactive_users']			= 'Inactive users';
$lang['us_activate']				= 'Activation';
$lang['us_user_activate_note']		= 'Enter your activation code to confirm your e-mail address and activate your membership.';
$lang['us_activate_note']			= 'Activate the user and allow them access to the site';
$lang['us_deactivate_note']			= 'Deactivate the user to prevent access to the site';
$lang['us_activate_enter']			= 'Please enter your activation code to continue.';
$lang['us_activate_code']			= 'Activation Code';
$lang['us_activate_request']		= 'Request a new one';
$lang['us_activate_resend']			= 'Resend Activation Code';
$lang['us_activate_resend_note']	= 'Enter your email and we will resend your activation code to you.';
$lang['us_confirm_activate_code']	= 'Confirm Activation Code';
$lang['us_activate_code_send']		= 'Send Activation Code';
$lang['bf_action_activate']			= 'Activate';
$lang['bf_action_deactivate']		= 'Deactivate';
$lang['us_account_activated']		= 'User account activation.';
$lang['us_account_deactivated']		= 'User account deactivation.';
$lang['us_account_activated_admin']	= 'Administrative account activation.';
$lang['us_account_deactivated_admin']	= 'Administrative account deactivation.';
$lang['us_active']					= 'Active';
$lang['us_inactive']				= 'Inactive';
//email subjects
$lang['us_email_subj_activate']		= 'Activate Your membership';
$lang['us_email_subj_pending']		= 'Registration Complete. Activation Pending.';
$lang['us_email_thank_you']			= 'Thank you for registering! ';
// Activation Statuses
$lang['us_registration_fail'] 		= 'Registration did not complete successfully. ';
$lang['us_check_activate_email'] 	= 'Please check your email for instructions to activate your account.';
$lang['us_admin_approval_pending']  = 'Your account is pending admin approval. You will receive email notification if your account is activated.';
$lang['us_account_not_active'] 		= 'Your account is not yet active please activate your account by entering the code.';
$lang['us_account_active'] 			= 'Congratulations. Your account is now active!.';
$lang['us_account_active_login'] 	= 'Your account is active and you can now login.';
$lang['us_account_reg_complete'] 	= 'Registration to [SITE_TITLE] completed!';
$lang['us_active_status_changed'] 	= 'The user status was successfully changed.';
$lang['us_active_email_sent'] 		= 'Activation email was sent.';
// Activation Errors
$lang['us_err_no_id'] 				= 'No User ID was received.';
$lang['us_err_status_error'] 		= 'The users status was not changed: ';
$lang['us_err_no_email'] 			= 'Unable to send an email: ';
$lang['us_err_wait'] 			    = ' Please Wait!: ';
$lang['us_err_activate_fail'] 		= 'Your membership could not be activated at this time due to the following reason: ';
$lang['us_err_activate_code'] 		= 'Please check your code and try again or contact the site administrator for help.';
$lang['us_err_no_matching_code'] 	= 'No matching activation code was found in the system.';
$lang['us_err_no_matching_id'] 		= 'No matching user id was found in the system.';
$lang['us_err_user_is_active'] 		= 'The user is already active.';
$lang['us_err_user_is_inactive'] 	= 'The user is already inactive.';

/* Password strength/match */
$lang['us_pass_strength']			= 'Strength';
$lang['us_pass_match']				= 'Comparison';
$lang['us_passwords_no_match']		= 'No match!';
$lang['us_passwords_match']			= 'Match!';
$lang['us_pass_weak']				= 'Weak';
$lang['us_pass_good']				= 'Good';
$lang['us_pass_strong']				= 'Strong';

$lang['us_tab_all']					= 'All Users';
$lang['us_tab_inactive']			= 'Inactive';
$lang['us_tab_banned']				= 'Banned';
$lang['us_tab_deleted']				= 'Deleted';
$lang['us_tab_roles']				= 'By Role';

$lang['us_forced_password_reset_note']	= 'Due to security reasons, you must choose a new password for your account.';

$lang['us_back_to']					= 'Back to ';
$lang['us_no_account']              = 'No account?';
$lang['us_force_password_reset']    = 'Force password reset on next login';

$lang['users_act_invalid_login_attempt'] = 'Invalid login attempt from IP %s for user %s, reason: %s';
