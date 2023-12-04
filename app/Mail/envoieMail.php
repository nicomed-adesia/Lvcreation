<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use App\Models\Commande;

class envoieMail extends Mailable
{
    use Queueable, SerializesModels;
    public $commande;
    /**
     * Create a new message instance.
     */
    public function __construct($commande)
    {
        $this->commande=$commande;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Envoie Mail',
        );
    }

    /**
     * Get the message content definition.
     */
    // public function content(): Content
    // {
    //     // return new Content(
    //     //     view: 'view.name',
    //     // );
    //     return $this->from('hopes@gamil.com')->subject('Produits acheter')->view('Mail.envoieMail')->with('commande',$commande);
    // }
        public function build(){
            return $this->from('lvcreation@gmail.com')
            ->subject('produit_acheter')
            ->view('admin.pages.mailaka.facture')
            ->with('commande', $this->commande);
        }
    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [
            // $this->view('client.layout.mailaka.facture')
        ];
    }
}
