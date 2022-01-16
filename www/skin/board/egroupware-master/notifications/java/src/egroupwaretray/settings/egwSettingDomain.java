/**
 * EGroupware - Notifications Java Desktop App
 *
 * @license http://opensource.org/licenses/gpl-license.php GPL - GNU General Public License
 * @package notifications
 * @subpackage jdesk
 * @link http://www.egroupware.org
 * @author Stefan Werfling <stefan.werfling@hw-softwareentwicklung.de>
 * @author Maik Hüttner <maik.huettner@hw-softwareentwicklung.de>
 */
package egroupwaretray.settings;

import egroupwaretray.*;
import java.io.IOException;
import java.util.logging.Level;
import java.util.logging.Logger;
import javax.swing.JFrame;

/**
 * egwSettingDomain
 * 
 * @author Stefan Werfling <stefan.werfling@hw-softwareentwicklung.de>
 */
public class egwSettingDomain extends javax.swing.JDialog {

	private jegwconfig _config		= null;
	private Boolean _isClickedBack	= false;
	
	/**
	 * Creates new form egwSettingDomain
	 */
	public egwSettingDomain(java.awt.Frame parent, boolean modal, jegwconfig configmanager) {
		super(parent, modal);
		initComponents();
		
		this._config = configmanager;
		
		this.jButtonNext.setText(jegwConst.getConstTag("egw_txt_next"));
		this.jButtonCancel.setText(jegwConst.getConstTag("egw_txt_cancel"));
		this.jButtonBack.setText(jegwConst.getConstTag("egw_txt_back"));
		this.jLabelStep.setText(jegwConst.getConstTag("egw_txt_step") + " 2.");
		this.jLabelTitleDomain.setText(jegwConst.getConstTag("egw_txt_egroupware_domain"));
		this.jLabelInfoText1.setText(jegwConst.getConstTag("egw_msg_info_logindomains"));
	}

	public void updateCombobox()
	{
		if( this._config.getCXMLM().countConf() > 0 )
		{	
			KeyArray aktivconf = this._config.getCXMLM().getActivConf();

			if( aktivconf != null )
			{
				String lastlogindomain = aktivconf.getString("logindomain");
				
				for( int i=0; i<this.jComboBoxDomain.getItemCount(); i++ )
				{
					Object item = this.jComboBoxDomain.getItemAt(i);
					
					if( item.toString().compareTo(lastlogindomain) == 0 )
					{
						this.jComboBoxDomain.setSelectedIndex(i);
						return;
					}
				}
			}
		}
	}
	
	/**
	 * This method is called from within the constructor to initialize the form.
	 * WARNING: Do NOT modify this code. The content of this method is always
	 * regenerated by the Form Editor.
	 */
	@SuppressWarnings("unchecked")
    // <editor-fold defaultstate="collapsed" desc="Generated Code">//GEN-BEGIN:initComponents
    private void initComponents() {

        jLabelStep = new javax.swing.JLabel();
        jLabelInfoText1 = new javax.swing.JLabel();
        jLabelTitleDomain = new javax.swing.JLabel();
        jComboBoxDomain = new javax.swing.JComboBox();
        jButtonNext = new javax.swing.JButton();
        jButtonBack = new javax.swing.JButton();
        jButtonCancel = new javax.swing.JButton();

        setDefaultCloseOperation(javax.swing.WindowConstants.DISPOSE_ON_CLOSE);
        setResizable(false);

        jLabelStep.setFont(new java.awt.Font("Tahoma", 1, 12)); // NOI18N
        jLabelStep.setText("Schritt 2.");

        jLabelInfoText1.setText("Es wurden folgende Logindomains gefunden. Wählen Sie bitte Ihre");

        jLabelTitleDomain.setText("Egroupware Logindomain:");

        jComboBoxDomain.setModel(new javax.swing.DefaultComboBoxModel(new String[] { "default" }));

        jButtonNext.setText("Weiter");
        jButtonNext.addMouseListener(new java.awt.event.MouseAdapter() {
            public void mouseClicked(java.awt.event.MouseEvent evt) {
                mouseClickedNext(evt);
            }
        });

        jButtonBack.setText("Zurück");
        jButtonBack.addMouseListener(new java.awt.event.MouseAdapter() {
            public void mouseClicked(java.awt.event.MouseEvent evt) {
                mouseClickedBack(evt);
            }
        });

        jButtonCancel.setText("Abbrechen");
        jButtonCancel.addMouseListener(new java.awt.event.MouseAdapter() {
            public void mouseClicked(java.awt.event.MouseEvent evt) {
                mouseClickedCancel(evt);
            }
        });

        javax.swing.GroupLayout layout = new javax.swing.GroupLayout(getContentPane());
        getContentPane().setLayout(layout);
        layout.setHorizontalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(layout.createSequentialGroup()
                .addContainerGap()
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addGroup(layout.createSequentialGroup()
                        .addComponent(jLabelTitleDomain)
                        .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.UNRELATED)
                        .addComponent(jComboBoxDomain, 0, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE))
                    .addGroup(layout.createSequentialGroup()
                        .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                            .addComponent(jLabelStep)
                            .addComponent(jLabelInfoText1))
                        .addGap(0, 61, Short.MAX_VALUE))
                    .addGroup(javax.swing.GroupLayout.Alignment.TRAILING, layout.createSequentialGroup()
                        .addComponent(jButtonBack)
                        .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                        .addComponent(jButtonCancel)
                        .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                        .addComponent(jButtonNext)))
                .addContainerGap())
        );
        layout.setVerticalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(layout.createSequentialGroup()
                .addContainerGap()
                .addComponent(jLabelStep)
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                .addComponent(jLabelInfoText1)
                .addGap(38, 38, 38)
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                    .addComponent(jLabelTitleDomain)
                    .addComponent(jComboBoxDomain, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE))
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                    .addComponent(jButtonNext)
                    .addComponent(jButtonBack)
                    .addComponent(jButtonCancel))
                .addContainerGap(javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE))
        );

        pack();
    }// </editor-fold>//GEN-END:initComponents

	private void mouseClickedBack(java.awt.event.MouseEvent evt) {//GEN-FIRST:event_mouseClickedBack
		
		this._isClickedBack = true;
		this.setVisible(false);
		
	}//GEN-LAST:event_mouseClickedBack

	private void mouseClickedCancel(java.awt.event.MouseEvent evt) {//GEN-FIRST:event_mouseClickedCancel
		// TODO add your handling code here:
		
		if( jegwMain.confirmDialog(
			jegwConst.getConstTag("egw_msg_cancal_setting"),
			jegwConst.getConstTag("egw_txt_cancal2") ) == 0 )
		{
			this.setVisible(false);
		}
	}//GEN-LAST:event_mouseClickedCancel

	private void mouseClickedNext(java.awt.event.MouseEvent evt) {//GEN-FIRST:event_mouseClickedNext
		// TODO add your handling code here:
		
		String logindomain = this.jComboBoxDomain.getSelectedItem().toString();
		
		KeyArray config = null;
			
		if( this._config.getCXMLM().countConf() > 0 )
		{	
			KeyArray aktivconf = this._config.getCXMLM().getActivConf();

			if( aktivconf != null )
			{
				config = aktivconf;
			}
		}
		
		if( config== null )
		{
			// Config erzeugen
			config = new KeyArray(jegwxmlconfig.CONF_STRUCT);

		}
			
		config.add("logindomain", logindomain);
		
		this._config.getCXMLM().deleteConf(0);
		this._config.getCXMLM().addConf(config);
		
		JFrame jf = EgroupwareTrayApp.getApplication().getMainFrame();
		egwSettingUsername dialog = new egwSettingUsername(jf, true, this._config);
		
		try {
			dialog.setIconImage(hwTrayIcon.getImage(jegwConst.getConstTag("egwicon")));
		} catch (IOException ex) {
			Logger.getLogger(hwTrayIcon.class.getName()).log(Level.SEVERE, null, ex);
		}

		dialog.setAlwaysOnTop(true);
		dialog.setVisible(true);
		
		if( !dialog.isClickedBack() )
		{
			this.setVisible(false);
		}
	}//GEN-LAST:event_mouseClickedNext

	/**
	 * @param args the command line arguments
	 */
	public static void main(String args[]) {
		/*
		 * Set the Nimbus look and feel
		 */
		//<editor-fold defaultstate="collapsed" desc=" Look and feel setting code (optional) ">
        /*
		 * If Nimbus (introduced in Java SE 6) is not available, stay with the
		 * default look and feel. For details see
		 * http://download.oracle.com/javase/tutorial/uiswing/lookandfeel/plaf.html
		 */
		try {
			for (javax.swing.UIManager.LookAndFeelInfo info : javax.swing.UIManager.getInstalledLookAndFeels()) {
				if ("Nimbus".equals(info.getName())) {
					javax.swing.UIManager.setLookAndFeel(info.getClassName());
					break;
				}
			}
		} catch (ClassNotFoundException ex) {
			java.util.logging.Logger.getLogger(egwSettingDomain.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
		} catch (InstantiationException ex) {
			java.util.logging.Logger.getLogger(egwSettingDomain.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
		} catch (IllegalAccessException ex) {
			java.util.logging.Logger.getLogger(egwSettingDomain.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
		} catch (javax.swing.UnsupportedLookAndFeelException ex) {
			java.util.logging.Logger.getLogger(egwSettingDomain.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
		}
		//</editor-fold>

		/*
		 * Create and display the dialog
		 */
		java.awt.EventQueue.invokeLater(new Runnable() {

			public void run() {
				egwSettingDomain dialog = new egwSettingDomain(new javax.swing.JFrame(), true, null);
				dialog.addWindowListener(new java.awt.event.WindowAdapter() {

					@Override
					public void windowClosing(java.awt.event.WindowEvent e) {
						System.exit(0);
					}
				});
				dialog.setVisible(true);
			}
		});
	}
    // Variables declaration - do not modify//GEN-BEGIN:variables
    private javax.swing.JButton jButtonBack;
    private javax.swing.JButton jButtonCancel;
    private javax.swing.JButton jButtonNext;
    private javax.swing.JComboBox jComboBoxDomain;
    private javax.swing.JLabel jLabelInfoText1;
    private javax.swing.JLabel jLabelStep;
    private javax.swing.JLabel jLabelTitleDomain;
    // End of variables declaration//GEN-END:variables

	public void clearSelect()
	{
		this.jComboBoxDomain.removeAllItems();
	}
	
	public void addSelect(String entry)
	{
		this.jComboBoxDomain.addItem(entry);
	}
	
	public Boolean isClickedBack()
	{
		return this._isClickedBack;
	}
}